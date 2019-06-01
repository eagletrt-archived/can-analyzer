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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Chimera EVO simulator</title>

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">

    <!-- <link rel="stylesheet" href="MDL/material.min.css" -->
    <link rel="stylesheet" href="styles.css">

  </head>

  <body>
     <!-- Main cointainer -->
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

      <!-- Top bar -->
      <header class="mdl-layout__header color-eagle-blue">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title txt-color-eagle-gray">Home</span>
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

      </main>
    </div>

    <!-- <script src="https://code.getmdl.io/1.3.0/material.min.js"></script> -->
    <script src="MDL/material.min.js"></script>
  </body>
</html>
