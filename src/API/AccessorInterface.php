<?php

namespace AmaTeam\TreeAccess\API;

use AmaTeam\TreeAccess\API\Exception\IllegalTargetException;
use AmaTeam\TreeAccess\API\Exception\MissingNodeException;

interface AccessorInterface
{
    /**
     * Returns node for specified path, or throws an error if such
     * node doesn't exist.
     *
     * @param mixed $root
     * @param string|string[] $path
     *
     * @return NodeInterface
     *
     * @throws IllegalTargetException
     * @throws MissingNodeException
     */
    public function getNode(&$root, $path);

    /**
     * Tries to find node with specified path and returns null if that
     * is not possible.
     *
     * @param mixed $root
     * @param string|string[] $path
     *
     * @return NodeInterface|null
     */
    public function findNode(&$root, $path);

    /**
     * Tells if specified node exists.
     *
     * @param mixed $root
     * @param string|string[] $path
     * @return bool
     */
    public function exists($root, $path);

    /**
     * @param mixed $root
     * @param string|string[] $path
     * @return bool
     */
    public function isReadable($root, $path);
    /**
     * @param mixed $root
     * @param string|string[] $path
     * @return bool
     */
    public function isWritable($root, $path);

    /**
     * @param mixed $root
     * @param string|string[] $path
     * @return bool
     */
    public function isEnumerable($root, $path);

    /**
     * Reads value at specified path.
     *
     * @param mixed $root
     * @param string|string[] $path
     * @return mixed
     *
     * @throws IllegalTargetException
     * @throws MissingNodeException
     */
    public function read(&$root, $path);

    /**
     * Returns children of node at specified path.
     *
     * @param mixed $root
     * @param string|string[] $path
     * @return NodeInterface[]
     *
     * @throws IllegalTargetException
     * @throws MissingNodeException
     */
    public function enumerate(&$root, $path);

    /**
     * Writes value at specified target.
     *
     * @param mixed $root
     * @param string|string[] $path
     * @param mixed $value
     * @return NodeInterface
     *
     * @throws IllegalTargetException
     * @throws MissingNodeException
     */
    public function write(&$root, $path, $value);
}
