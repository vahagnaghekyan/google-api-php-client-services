<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Genomics_SearchJobsRequest extends Google_Collection
{
  protected $collection_key = 'status';
  public $createdAfter;
  public $createdBefore;
  public $pageSize;
  public $pageToken;
  public $projectNumber;
  public $status;

  public function setCreatedAfter($createdAfter)
  {
    $this->createdAfter = $createdAfter;
  }
  public function getCreatedAfter()
  {
    return $this->createdAfter;
  }
  public function setCreatedBefore($createdBefore)
  {
    $this->createdBefore = $createdBefore;
  }
  public function getCreatedBefore()
  {
    return $this->createdBefore;
  }
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  public function getPageSize()
  {
    return $this->pageSize;
  }
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  public function getPageToken()
  {
    return $this->pageToken;
  }
  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }
  public function getProjectNumber()
  {
    return $this->projectNumber;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}
