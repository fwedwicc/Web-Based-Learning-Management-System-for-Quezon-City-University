<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QCU-LMS</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/image/QCU-logo.png" type="image/x-icon">
  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="../output.css">
</head>

<body>
  <!-- Top navigation -->
  <nav class="fixed top-0 z-50 w-full bg-lav-sant border-b border-lavender-blue">
    <div class="px-3 py-4 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <!-- Sidebar responsive -->
          <button data-drawer-target="left-sidebar" data-drawer-toggle="left-sidebar" aria-controls="left-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="#" class="flex ms-2 md:me-24">
            <img src="../../assets/image/QCU-logo.png" class="h-7 me-4" alt="QCU Logo" />
            <span class="self-center text-xl font-semibold sm:text-lg whitespace-nowrap text-corn-flower-blue">QCU-LMS</span>
          </a>
        </div>
        <div class="flex items-center">
          <!-- Notication bell sample -->
          <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-deep-koamaru hover:text-neon-blue transition duration-300 ease-in-out focus:outline-none mr-3 focus:text-neon-blue" type="button">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
              <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
            </svg>
            <div class="absolute block w-3 h-3 bg-red-500 border-2 border-lav-sant rounded-full -top-0.5 start-2.5">
            </div>
          </button>
          <!-- Dropdown menu ng notif bell-->
          <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-indigo-100 rounded-2xl drop-shadows" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center text-deep-koamaru rounded-t-2xl bg-white">
              Notifications
            </div>
            <div class="divide-y divide-indigo-100">
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New task from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Quiz 1"</div>
                  <div class="text-xs text-neon-blue">a few moments ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New material from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Week 3"</div>
                  <div class="text-xs text-neon-blue">10 minutes ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New material from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Week 2"</div>
                  <div class="text-xs text-neon-blue">44 minutes ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New task from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Activity 1"</div>
                  <div class="text-xs text-neon-blue">1 hour ago</div>
                </div>
              </a>
            </div>
            <a href="#" class="block py-2 text-sm font-medium text-center text-deep-koamaru rounded-b-2xl bg-white hover:bg-lav-sant hover:text-neon-blue transtion duration-300 ease-in-out">
              <div class="inline-flex items-center hover:text-neon-blue">
                <svg class="w-4 h-4 me-2 text-deep-koamaru hover:text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                  <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                </svg>
                View all
              </div>
            </a>
          </div>
          <div class="flex items-center ms-3">
            <div>
              <!-- Profile sa taas -->
              <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-700 hover:bg-neon-blue transition duration-300 ease-in-out rounded-full md:me-0 focus:ring-4 focus:ring-perano focus:bg-neon-blue" type="button">
                <span class="sr-only">Open user menu</span>
                <svg class="w-6 h-6 text-lav-sant" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-2xl drop-shadows w-56">
                <div class="px-4 py-3 text-sm text-deep-koamaru flex flex-col justify-center items-center">
                  <img class="w-14 h-auto rounded-full mb-3" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="font-medium"><?php echo $_SESSION['fullname']; ?></div>
                  <div class="truncate"><?php echo $_SESSION['email']; ?></div>
                </div>
                <ul class="py-2 text-sm font-medium text-deep-koamaru text-center" aria-labelledby="dropdownUserAvatarButton">
                  <li>
                    <a href="./student-settings.php" class="block px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Settings</a>
                  </li>
                  <li>
                    <button data-modal-target="sign-out-modal" data-modal-toggle="sign-out-modal" type="button" class="w-full px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Logout</button>
                  </li>
                </ul>
              </div>
              <!-- Sign Out Modal -->
              <div id="sign-out-modal" tabindex="-1" data-modal-backdrop="static" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
                <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-2xl py-8">
                    <div class="p-4 md:p-5 text-center space-x-4">
                      <svg class="mx-auto mb-4 text-corn-flower-blue w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      <h3 class="mb-12 text-lg font-normal text-deep-koamaru">Are you sure you want to Logout?</h3>
                      <a href="../models/logout.php/" data-modal-hide="sign-out-modal" type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                        Yes
                      </a>
                      <button data-modal-hide="sign-out-modal" type="button" class="text-deep-koamaru bg-transparent border border-purple-blue hover:bg-ghost-lavender focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-lg text-lg inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">No</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- // Sign Out Modal -->
            </div>
          </div>
        </div>
      </div>
  </nav>
  <!-- Left Sidebar -->
  <aside id="left-sidebar" class="sidebar" aria-label="Sidebar">
    <div class="sidebar-container">
      <!-- Top Side -->
      <ul class="space-y-1 font-medium text-base">
        <li>
          <!-- Dashboard -->
          <a href="./student-dashboard.php" class="nav-btn group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="nav-btn-icon group-hover:text-neon-blue">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
            </svg>
            <span class="ms-3">Dashboard</span>
          </a>
        </li>
        <li>
          <!-- Courses -->
          <a href="" class="nav-btn group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="nav-btn-icon group-hover:text-neon-blue">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap">Courses</span>
            <span class="btn-indicator">4</span>
          </a>
        </li>
      </ul>
      <!-- Bottom Side -->
      <ul class="space-y-1 font-medium">
        <li>
          <!-- Settings -->
          <a href="#" class="nav-btn group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="nav-btn-icon group-hover:text-neon-blue">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap">Settings</span>
          </a>
        </li>
        <li>
          <!-- Help -->
          <a href="#" class="nav-btn group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="nav-btn-icon group-hover:text-neon-blue">
              <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap">Help</span>
          </a>
        </li>
        <li class="pt-4">
          <!-- Link -->
          <div class="border border-indigo-300 flex items-center p-4 gap-3 bg-ghost-lavender rounded-lg">
            <img class="w-9 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
            <div class="space-y-1">
              <span class=" text-sm block text-neon-blue font-bold">Juan Dela Cruz</span>
              <p class="text-xs text-deep-koamaru font-thin">juan.dc.12@gmail.com</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </aside>

  <script src="./side-bar.js"></script>
  <!-- Flowbite Script -->
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>