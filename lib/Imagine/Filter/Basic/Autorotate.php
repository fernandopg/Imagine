<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Filter\Basic;

use Imagine\Image\ImageInterface;
use Imagine\Image\Color;
use Imagine\Filter\FilterInterface;

class Autorotate implements FilterInterface
{
    /**
     * @var Color
     */
    private $background;

    /**
     * @param Color $background
     */
    public function __construct(Color $background = null)
    {
        $this->background = $background;
    }

    /**
     * {@inheritdoc}
     */
    public function apply(ImageInterface $image)
    {
        return $image->autorotate($this->background);
    }
}
