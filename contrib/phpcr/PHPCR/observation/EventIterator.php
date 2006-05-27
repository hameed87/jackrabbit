<?php

/*
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


require_once 'PHPCR/RangeIterator.php';
require_once 'PHPCR/observation/Event.php';
require_once 'PHPCR/NoSuchElementException.php';


/**
 * Allows easy iteration through a list of <code>Event</code>s
 * with <code>nextEvent</code> as well as a <code>skip</code> method inherited from
 * <code>RangeIterator</code>.
 *
 * @author Markus Nix <mnix@mayflower.de>
 * @package phpcr
 * @subpackage observation
 */
interface EventIterator extends RangeIterator
{
     /**
      * Returns the next <code>Event</code> in the iteration.
      *
      * @return the next <code>Event</code> in the iteration.
      * @throws NoSuchElementException if iteration has no more <code>Event</code>s.
     */
    public function nextEvent();
}

?>