<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
    <head>
        <?php include 'include/head.php'; ?>
    </head>

    <body>
        <!-- Main cointainer -->
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

            <!-- Top bar -->
            <header class="mdl-layout__header color-eagle-blue">
                <div class="mdl-layout__header-row">
                </div>
            </header>

            <!-- Left menù -->
            <div class="demo-drawer mdl-layout__drawer color-eagle-darkblue mdl-color-text--blue-grey-50">
                <header class="demo-drawer-header">
                    <img src="images/logo.png" class="logo"><br>
                    <img src="images/text-logo.png" class="logo">
                </header>

                <nav class="demo-navigation mdl-navigation color-eagle-blue">
                    <a class="mdl-navigation__link" href="index.php"><i class="material-icons" role="presentation">home</i>HOME</a>
                    <a class="mdl-navigation__link" href="car_view.php"><i class="material-icons" role="presentation">time_to_leave</i>Car view</a>
                    <a class="mdl-navigation__link" href="detailed_view.php"><i class="material-icons" role="presentation">list</i>Detailed view</a>
                </nav>
            </div>
            <!-- End left menù -->

            <!-- Main tag (page content) -->
            <main class="mdl-layout__content color-eagle-gray">
                <div class="mdl-grid" style="padding-top: 100px;">
                    <div class="mdl-cell mdl-cell--1-col"></div>
                    <div class="mdl-cell mdl-cell--10-col">
                        <img src="images/car.png" class="car-image">
                    </div>
                    <div class="mdl-cell mdl-cell-1-col"></div>
                </div>
            </main>
        </div>

        <!-- <script src="https://code.getmdl.io/1.3.0/material.min.js"></script> -->
        <script src="MDL/material.min.js"></script>
    </body>
</html>
