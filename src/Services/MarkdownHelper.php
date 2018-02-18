<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 15.02.18
 * Time: 21:57
 */

namespace App\Services;


class MarkdownHelper implements MarkDownInterface
{
    /**
     * @var Magic
     */
    private $magic;

    public function __construct(Magic $magic)
    {

        $this->magic = $magic;
    }

    public function do()
    {

    }
}