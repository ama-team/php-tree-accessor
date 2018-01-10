<?php

namespace AmaTeam\TreeAccess;

use AmaTeam\TreeAccess\API\NodeInterface;

class Node implements NodeInterface
{
    /**
     * @var string[]
     */
    private $path;
    /**
     * @var mixed
     */
    private $value;
    /**
     * @var bool
     */
    private $readable;
    /**
     * @var bool
     */
    private $writable;

    /**
     * @param string[] $path
     * @param mixed $value
     * @param bool $readable
     * @param bool $writable
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function __construct(
        array $path,
        &$value,
        $readable = true,
        $writable = true
    ) {
        $this->path = $path;
        $this->value = &$value;
        $this->readable = $readable;
        $this->writable = $writable;
    }

    /**
     * @return string[]
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function &getValue()
    {
        return $this->value;
    }

    /**
     * @return bool
     */
    public function isReadable()
    {
        return $this->readable;
    }

    /**
     * @return bool
     */
    public function isWritable()
    {
        return $this->writable;
    }
}
