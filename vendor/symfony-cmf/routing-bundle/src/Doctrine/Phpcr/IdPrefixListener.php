<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr;

use Doctrine\Persistence\Event\LifecycleEventArgs;

/**
 * Doctrine PHPCR-ODM listener to tell routes what part of their id is the URL.
 *
 * This listener knows about the RouteProvider and uses its prefixes to
 * identify routes that could need the prefix. In case prefixes overlap, the
 * order matters as the first matching prefix is taken.
 *
 * @author David Buchmann <mail@davidbu.ch>
 */
final class IdPrefixListener
{
    /**
     * Used to ask for the possible prefixes to remove from the repository ID
     * to create the URL.
     */
    private PrefixCandidates $candidates;

    /**
     * This listener only makes sense together with the PrefixCandidates
     * strategy.
     */
    public function __construct(PrefixCandidates $candidates)
    {
        $this->candidates = $candidates;
    }

    private function getPrefixes(): array
    {
        return $this->candidates->getPrefixes();
    }

    public function postLoad(LifecycleEventArgs $args): void
    {
        $this->updateId($args);
    }

    public function postPersist(LifecycleEventArgs $args): void
    {
        $this->updateId($args);
    }

    public function postMove(LifecycleEventArgs $args): void
    {
        $this->updateId($args);
    }

    private function updateId(LifecycleEventArgs $args): void
    {
        $doc = $args->getObject();

        // only update route objects and only if the prefix can match, to allow
        // for more than one listener and more than one route root
        if ($doc instanceof PrefixInterface) {
            foreach ($this->getPrefixes() as $prefix) {
                if (str_starts_with($doc->getId(), $prefix)) {
                    $doc->setPrefix($prefix);

                    break;
                }
            }
        }
    }
}
