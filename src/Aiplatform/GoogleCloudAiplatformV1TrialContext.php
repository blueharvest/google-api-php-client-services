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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1TrialContext extends \Google\Collection
{
  protected $collection_key = 'parameters';
  /**
   * @var string
   */
  public $description;
  protected $parametersType = GoogleCloudAiplatformV1TrialParameter::class;
  protected $parametersDataType = 'array';

  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param GoogleCloudAiplatformV1TrialParameter[]
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return GoogleCloudAiplatformV1TrialParameter[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1TrialContext::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1TrialContext');
