<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="index.css" />
    <link rel="icon" href="images/alms-logo.png" />

    <title>Manage Author | ALMS</title>
  </head>
  <body>
    <!-- NAV BAR -->
    <nav>
      <div class="menu-btn">
        <button id="open-btn" onclick="openSideMenu()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="24"
            height="24"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
            >
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#000000">
                <path
                  d="M21.5,35.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376zM21.5,78.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376zM21.5,121.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376z"
                ></path>
              </g>
            </g>
          </svg>
        </button>
      </div>
      <div id="logo-div">
        <a href="dashboard.html"><img src="images/logo" alt="" /></a>
        <a href="dashboard.html">ALMS</a>
      </div>
      <div id="search-container">
        <input type="text" placeholder="Search" name="search-input" />
      </div>
      <ul class="main-nav">
        <li><a href="dashboard.html" class="">Home</a></li>
        <li onClick="showInnerUL()"><a href="#">Books</a></li>
        <li class="user-handle">
          <a href="index.html"
            ><img class="user-img" src="images/default.jpg" alt=""
          /></a>
        </li>
      </ul>
    </nav>

    <!-- SIDE MENU / SIDEBAR -->
    <section class="side-menu">
      <!-- Close button -->
      <button onclick="closeSideMenu()">
        <img class="close-btn" src="images/arrow-white.png" alt="" />
      </button>

      <!-- User/librarian profile picture -->
      <div class="tasks">
        <div class="item user-profile">
          <img src="images/default.jpg" alt="" />
          <div>
            <p>Mr. Ms. Mrs. Surname</p>
          </div>
        </div>

        <!-- Navigation -->

        <!-- Action: Add new book -->
        <div class="item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="24"
            height="24"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g transform="">
              <g
                fill="none"
                fill-rule="nonzero"
                stroke="none"
                stroke-width="1"
                stroke-linecap="butt"
                stroke-linejoin="miter"
                stroke-miterlimit="10"
                stroke-dasharray=""
                stroke-dashoffset="0"
                font-family="none"
                font-weight="none"
                font-size="none"
                text-anchor="none"
                style="mix-blend-mode: normal"
              >
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#ffffff">
                  <path
                    d="M30.96,13.76c-9.44436,0 -17.2,7.75564 -17.2,17.2v110.08c0,9.44437 7.75564,17.2 17.2,17.2h110.08c9.44437,0 17.2,-7.75563 17.2,-17.2v-110.08c0,-9.44436 -7.75563,-17.2 -17.2,-17.2zM30.96,20.64h110.08c5.69163,0 10.32,4.62836 10.32,10.32v110.08c0,5.69163 -4.62837,10.32 -10.32,10.32h-110.08c-5.69164,0 -10.32,-4.62837 -10.32,-10.32v-110.08c0,-5.69164 4.62836,-10.32 10.32,-10.32zM82.56,44.72v37.84h-37.84v6.88h37.84v37.84h6.88v-37.84h37.84v-6.88h-37.84v-37.84z"
                  ></path>
                </g>
              </g>
            </g>
          </svg>
          <a href="new-book.html" class="task">Add New Book</a>
        </div>
        <!-- end -->

        <!-- Action: Borrow Book -->
        <div class="item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="32"
            height="32"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
            >
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#ffffff">
                <path
                  d="M37.625,10.75c-8.86035,0 -16.125,7.26465 -16.125,16.125v112.875h2.26758c2.35156,5.9629 7.09668,10.75 13.85742,10.75h102.125v-10.75h-102.125c-3.02344,0 -5.375,-2.35156 -5.375,-5.375c0,-3.02344 2.35156,-5.375 5.375,-5.375h102.125v-118.25zM37.625,21.5h91.375v96.75h-91.375c-1.88965,0 -3.69531,0.41993 -5.375,1.00781v-92.38281c0,-3.02344 2.35156,-5.375 5.375,-5.375zM75.25,43v32.25h-21.5l26.875,26.875l26.875,-26.875h-21.5v-32.25z"
                ></path>
              </g>
            </g>
          </svg>
          <a href="book-borrow-slip.html" class="task">Borrow Book</a>
        </div>
        <!-- end -->

        <!-- Action: Reserve Book -->
        <div class="item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="32"
            height="32"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
            >
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#ffffff">
                <path
                  d="M37.625,21.5c-8.84221,0 -16.125,7.28279 -16.125,16.125v96.75c0,8.84221 7.28279,16.125 16.125,16.125h75.25c8.84221,0 16.125,-7.28279 16.125,-16.125v-34.79053l28.15577,-27.67285c5.37091,-5.22958 5.42444,-13.99692 0.12597,-19.29541l-5.64794,-5.64795c-2.64925,-2.64925 -6.16903,-3.94878 -9.6792,-3.92627c-3.51018,0.02247 -7.00142,1.36679 -9.61621,4.05225l-3.33838,3.40137v-12.87061c0,-8.84221 -7.28279,-16.125 -16.125,-16.125zM37.625,32.25h75.25c3.02579,0 5.375,2.34921 5.375,5.375v23.78857l-36.05029,36.65918l-7.47461,31.45215l31.45215,-7.4746l1.04981,-1.04981l11.02295,-10.83398v24.20849c0,3.02579 -2.34921,5.375 -5.375,5.375h-75.25c-3.02579,0 -5.375,-2.34921 -5.375,-5.375v-96.75c0,-3.02579 2.34921,-5.375 5.375,-5.375zM142.01758,53.70801c0.71681,-0.00355 1.43987,0.28507 2.01563,0.86084l5.64794,5.64795c1.15151,1.15151 1.1446,2.87583 -0.02099,4.01025h-0.02099l-48.83692,48.03906l-11.58984,2.77149l2.75049,-11.54785l48.06006,-48.87891v-0.021c0.5672,-0.58254 1.27779,-0.87829 1.99463,-0.88184zM43,53.75v10.75h10.75v-10.75zM64.5,53.75v10.75h43v-10.75zM43,75.25v10.75h10.75v-10.75zM64.5,75.25v10.75h14.5083l10.56103,-10.75zM43,96.75v10.75h10.75v-10.75zM64.5,96.75v10.75h4.40918l2.56152,-10.75z"
                ></path>
              </g>
            </g>
          </svg>
          <a href="book-reservation.html" class="task">Reserve Book</a>
        </div>
        <!-- end -->

        <!-- Action: Add new author -->
        <div class="item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="32"
            height="32"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
            >
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#ffffff">
                <path
                  d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z"
                ></path>
              </g>
            </g>
          </svg>
          <a href="new-author.html" class="task">Add New Author</a>
        </div>
        <!-- end -->

        <!-- Action: Register Patron -->
        <div class="item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="32"
            height="32"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
            >
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#ffffff">
                <path
                  d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z"
                ></path>
              </g>
            </g>
          </svg>
          <a href="new-patron.html" class="task">Register Patron</a>
        </div>
        <!-- end -->

        <!-- Action: Manage Patron -->
        <div class="item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="32"
            height="32"
            viewBox="0 0 172 172"
            style="fill: #000000"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
            >
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#ffffff">
                <path
                  d="M86,21.5c-17.7627,0 -32.25,14.4873 -32.25,32.25c0,17.7627 14.4873,32.25 32.25,32.25c17.7627,0 32.25,-14.4873 32.25,-32.25c0,-17.7627 -14.4873,-32.25 -32.25,-32.25zM86,86c-29.64648,0 -53.75,24.10352 -53.75,53.75h10.75c0,-23.72558 19.27442,-43 43,-43c5.24902,0 10.24609,1.0918 14.90723,2.81348c2.93945,-2.85547 6.29882,-5.16504 9.91016,-7.18067c-7.47461,-3.94726 -15.83105,-6.38281 -24.81739,-6.38281zM86,32.25c11.92578,0 21.5,9.57422 21.5,21.5c0,11.92578 -9.57422,21.5 -21.5,21.5c-11.92578,0 -21.5,-9.57422 -21.5,-21.5c0,-11.92578 9.57422,-21.5 21.5,-21.5zM129,96.75v11.3379c-3.40136,0.71386 -6.55078,2.0996 -9.36426,3.94726l-8.0625,-8.0625l-7.60058,7.60058l8.0625,8.0625c-1.88965,2.81348 -3.27539,5.9629 -3.98926,9.36426h-11.2959v10.75h11.2959c0.71388,3.44336 2.1416,6.55078 3.98926,9.36426l-8.0625,8.0625l7.60058,7.60058l8.0625,-8.0625c2.81348,1.84766 5.9629,3.2334 9.36426,3.94727v11.33789h10.75v-11.2959c3.44336,-0.71386 6.59277,-2.05761 9.40625,-3.94727l8.02051,8.02051l7.60058,-7.60058l-8.02051,-8.02051c1.88966,-2.81348 3.23341,-6.00489 3.94727,-9.40625h11.2959v-10.75h-11.2959c-0.71386,-3.44335 -2.05761,-6.59277 -3.94727,-9.40625l8.02051,-8.02051l-7.60058,-7.60058l-8.02051,8.02051c-2.81348,-1.88965 -6.00489,-3.2334 -9.40625,-3.94727v-11.2959zM134.375,118.25c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125z"
                ></path>
              </g>
            </g>
          </svg>
          <a href="manage-patrons.html" class="task">Manage Patron</a>
        </div>
        <!-- end -->
      </div>
    </section>

  <main>

    <div class="book-list-table">
      <h2 class="table-name">Manage Authors</h2>
      <div class="column-name">
        <!-- colomn titles -->
        <h2>Author ID</h2>
        <h2>Author</h2>
        <h2>Address</h2>
        <h2>Action</h2>
      </div>
      <!-- end: column-name div -->

      <!-- table row data -->
      <?php
      include "includes/manage-authors(backend).php";
      if (mysqli_num_rows($authors) > 0) {
        while ($row = mysqli_fetch_assoc($authors)) {
          echo ('  
            <div class="table-data">
                <div>' . $row["Author_ID"] . '</div>
                <div>' . $row["Author_FirstName"] . ' ' . $row["Author_MiddleName"] . ' ' . $row["Author_LastName"] . '</div>
                <div>' . $row["Author_StateAddress"] . ', ' . $row["Author_CountryAddress"] . '</div>
                <div class="action">
                  <a href="editpage-author.php?edit=' . $row["Author_ID"] . '" class="edit" name="edit"></a>
                  <button class="delete" onclick="openDeletePrompt(this)" value=' . $row["Author_ID"] . '></button>
                </div>
              </div>            
              ');
        };
      } ?>

  </main>

  <!-- Delete Prompt Div -->
  <div class="delete-prompt">
    <div class="confirm-delete">
      <h2>Confirm Delete Entry</h2>
      <form action="includes/manage-authors(backend).php" method="GET">
        <p>Are you sure to delete this entry from the database?</p>
        <input type="hidden" name="confirmDelete">
        <input type="submit" name="delete">
        <button type="button" onclick="closeDeletePrompt()">CANCEL</button>
      </form>
    </div>
  </div>
  <!-- end -->

    <script src="index.js"></script>
  </body>
</html>
