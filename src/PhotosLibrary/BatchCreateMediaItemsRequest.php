<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\PhotosLibrary;

class BatchCreateMediaItemsRequest extends \Google\Collection
{
  protected $collection_key = 'newMediaItems';
  /**
   * @var string
   */
  public $albumId;
  protected $albumPositionType = AlbumPosition::class;
  protected $albumPositionDataType = '';
  protected $newMediaItemsType = NewMediaItem::class;
  protected $newMediaItemsDataType = 'array';

  /**
   * @param string
   */
  public function setAlbumId($albumId)
  {
    $this->albumId = $albumId;
  }
  /**
   * @return string
   */
  public function getAlbumId()
  {
    return $this->albumId;
  }
  /**
   * @param AlbumPosition
   */
  public function setAlbumPosition(AlbumPosition $albumPosition)
  {
    $this->albumPosition = $albumPosition;
  }
  /**
   * @return AlbumPosition
   */
  public function getAlbumPosition()
  {
    return $this->albumPosition;
  }
  /**
   * @param NewMediaItem[]
   */
  public function setNewMediaItems($newMediaItems)
  {
    $this->newMediaItems = $newMediaItems;
  }
  /**
   * @return NewMediaItem[]
   */
  public function getNewMediaItems()
  {
    return $this->newMediaItems;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchCreateMediaItemsRequest::class, 'Google_Service_PhotosLibrary_BatchCreateMediaItemsRequest');
