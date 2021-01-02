<?php

/*
 * This file is part of fof/follow-tags.
 *
 * Copyright (c) 2020 FriendsOfFlarum.
 * Copyright (c) 2016 - 2019 Flagrow
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FoF\Upload\Contracts;

use FoF\Upload\Commands\Download;
use FoF\Upload\File;
use Psr\Http\Message\ResponseInterface;

interface Downloader
{
    /**
     * Whether the upload adapter works on a specific mime type.
     *
     * @param File $file
     *
     * @return bool
     */
    public function forFile(File $file);

    /**
     * @param File     $file
     * @param Download $command
     *
     * @return ResponseInterface
     */
    public function download(File $file, Download $command);
}
