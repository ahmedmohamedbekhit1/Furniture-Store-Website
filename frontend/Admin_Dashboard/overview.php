<?php
session_start();

if (!isset($_SESSION['adminData'])) {
header('location:./../Errors/404.html');
}
 else{   
    include_once('./../../backend/overview.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboardStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
.carddd::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url(<?php echo $secondProduct['image']; ?>);
  background-size: cover;
  background-position: center;
  z-index: -1;
}
.carddd2::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url(<?php echo $thirdProduct['image']; ?>);
  background-size: cover;
  background-position: center;
  z-index: -1;
}
</style>
</head>

<body>

    <body>
        <!-- Sidebar (navigation drawer) -->
        <div id="sidebar" class="sidebar">
            <div class="logo">
                <div class="flex2">
                    <img src="img/logooo.jpeg" alt="">
                    <h2 class="name_banner">3AM</h2>
                </div>

            </div>
            <hr>
            <!-- Sidebar menu -->
            <ul>
                <!-- Overview -->
                <li class="checked-li"><a href="overview.php" ><i class="fa fa-home"></i> Overview</a></li>
                <!-- Categories -->
                <li><a href="Categories.php" ><i class="fa fa-list"></i> Categories</a></li>
                <!-- Products -->
                <li><a href="Products.php" ><i class="fa fa-cube"></i>Products </a></li>              
            </ul>
           
            <div class="card">
                <div class="card-content2">
                    <h3>Need help?</h3>
                    <p>Please Contact us</p>
                    <a href="https://www.facebook.com/mark.magdy.71465572" class="button">Here</a>
                </div>
            </div>


        </div>

        <!-- Page content -->
        <div id="main" class="main">
            <!-- Top bar (header) -->
            <div id="topbar" class="topbar">
                <section class="flex">
                    <span class="toggle-btn" onclick="toggleSidebar()">&#9776;</span>
                    <div class="col">
                        <h2><i class="fa fa-home"></i>/ Dashboard</h2>
                        <h5>Dashboard</h5>
                    </div>

                </section>

                <div class="user-profile">
                   
                    <img src="img/profile.jpg" alt="Profile Icon">
                    <span class="username"><?php echo $_COOKIE['fname']." ".$_COOKIE['lname'];  ?></span>
                    <form action="../../backend/logout.php" method="post">
          <button type="submit" class="Btn">

            <div class="sign"><svg viewBox="0 0 512 512">
                <path
                  d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                </path>
              </svg></div>

            <div class="text">-- Logout</div>
          </button>
        </form>
                </div>
            </div>
            <script>document.addEventListener('DOMContentLoaded', function () {
                    var header = document.getElementById('topbar');

                    window.addEventListener('scroll', function () {
                        if (window.scrollY > 0) {
                            header.classList.add('topbar-Scroll');
                        } else {
                            header.classList.remove('topbar-Scroll');
                        }
                    });
                });
            </script>
            <!-- Initial content -->
            <div id="content" class="content">
                <div class="overview">
                    <section class="flex">
                        <div class="P_card2">
                            <div class="flex">
                                <div class="col">
                                    <h2>Number of products</h2>
                                    <p id="product-levels">$0.00</p>
                                </div>
                                <img src="img/icon.svg" alt="">
                            </div>
                        </div>
                        <div class="P_card2">
                            <div class="flex">
                                <div class="col">
                                    <h2>Unsold invetories</h2>
                                    <p id="inventory-levels">0 units</p>
                                </div>
                                <img src="img/icon.svg" alt="">
                            </div>
                        </div>
                        <div class="P_card2">
                            <div class="flex">
                                <div class="col">
                                    <h2>Sold invetories</h2>
                                    <p id="sold-inventory-levels">0 units</p>
                                </div>
                                <img src="img/icon.svg" alt="">
                            </div>
                        </div>
                        <div class="P_card2">
                            <div class="flex">
                                <div class="col">
                                    <h2>Unique Transactions</h2>
                                    <p id="customer-satisfaction">jj</p>
                                </div>
                                <img src="img/icon.svg" alt="">
                            </div>
                        </div>
                        <div class="P_card2">
                            <div class="flex">
                                <div class="col">
                                    <h2>Total Sales</h2>
                                    <p id="total-sales">$0.00</p>
                                </div>
                                <img src="img/icon.svg" alt="">
                            </div>
                        </div>
                    </section>
                    <div class="flex">
                        <div class="chart-container">
                            <div class="flex">
                                <div class="col ">
                                    <div class="text-style">
                                        <h1>Top Bought Product</h2>
                                            <h2><?php echo $topProduct['name']; ?></h2>
                                            <h3>Rank#1</h3>
                                            <h4>Quantity Bought : <?php echo $topProduct['quantity_bought']; ?></h4>
                                    </div>
                                </div>
                                <img src="<?php echo $topProduct['image']; ?>" alt="<?php echo $topProduct['name']; ?>">
                            </div>
                        </div>
                        <div class="chart-container2">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                    <div class="flex2">
                        <div class="flex3">

                            <div class="carddd">
                                <div class="card-content">
                                    <h2><?php echo $secondProduct['name']; ?></h2>
                                    <p>Rank#2  <br> Quantity Bought : <?php echo $secondProduct['quantity_bought']; ?></p>
                                </div>
                            </div>

                            <div class="carddd2">
                                <div class="card-content">
                                    <h2><?php echo $thirdProduct['name']; ?></h2>
                                    <p>Rank#3 <br>  Quantity Bought : <?php echo $thirdProduct['quantity_bought']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="footer-flex">
                            <h3>&copy; 2024, made with by 3AM Team for a better web.</h3>
                            <ul class="example-2">
                                <li class="icon-content">
                                  <a
                                    href="https://linkedin.com/"
                                    aria-label="LinkedIn"
                                    data-social="linkedin"
                                  >
                                    <div class="filled"></div>
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="16"
                                      height="16"
                                      fill="currentColor"
                                      class="bi bi-linkedin"
                                      viewBox="0 0 16 16"
                                      xml:space="preserve"
                                    >
                                      <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                                        fill="currentColor"
                                      ></path>
                                    </svg>
                                  </a>
                                  <div class="tooltip">LinkedIn</div>
                                </li>
                                <li class="icon-content">
                                  <a href="https://www.github.com/" aria-label="GitHub" data-social="github">
                                    <div class="filled"></div>
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="16"
                                      height="16"
                                      fill="currentColor"
                                      class="bi bi-github"
                                      viewBox="0 0 16 16"
                                      xml:space="preserve"
                                    >
                                      <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                        fill="currentColor"
                                      ></path>
                                    </svg>
                                  </a>
                                  <div class="tooltip">GitHub</div>
                                </li>
                                <li class="icon-content">
                                  <a
                                    href="https://www.instagram.com/"
                                    aria-label="Instagram"
                                    data-social="instagram"
                                  >
                                    <div class="filled"></div>
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="16"
                                      height="16"
                                      fill="currentColor"
                                      class="bi bi-instagram"
                                      viewBox="0 0 16 16"
                                      xml:space="preserve"
                                    >
                                      <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                        fill="currentColor"
                                      ></path>
                                    </svg>
                                  </a>
                                  <div class="tooltip">Instagram</div>
                                </li>
                                <li class="icon-content">
                                  <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube">
                                    <div class="filled"></div>
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="16"
                                      height="16"
                                      fill="currentColor"
                                      class="bi bi-youtube"
                                      viewBox="0 0 16 16"
                                      xml:space="preserve"
                                    >
                                      <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                                        fill="currentColor"
                                      ></path>
                                    </svg>
                                  </a>
                                  <div class="tooltip">Youtube</div>
                                </li>
                              </ul>
                              
                        </div>
                    </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Simulated data (replace with actual data retrieval logic)
            const totalSales = <?php echo $TotalSales; ?>; // Example: $50,000
            const inventoryLevels = <?php echo $TotalInventory; ?>; // Example: 150 units
            const soldinventoryLevels = <?php echo $soldTotalInventory; ?>;
            const customerSatisfaction = <?php echo $TotalUsers; ?>;
            const totalproducts = <?php echo $TotalProducts; ?>; 

            // Display metrics product-levels
            document.getElementById('total-sales').textContent = `$${totalSales.toFixed(2)}`;
            document.getElementById('inventory-levels').textContent = `${inventoryLevels} units`;
            document.getElementById('sold-inventory-levels').textContent = `${soldinventoryLevels} units`;
            document.getElementById('customer-satisfaction').textContent = `${customerSatisfaction}`;
            document.getElementById('product-levels').textContent = `${totalproducts}`;

            const products = <?php echo $productsJson; ?>;
            const values = <?php echo $valuesJson; ?>;
              // Initialize chart
              const salesData = {
                labels: products, // Use product names as labels
                datasets: [{
                    label: 'Product Sales',
                    data: values, // Use the total values
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            };


            const salesChartCanvas = document.getElementById('salesChart').getContext('2d');
            const chart = new Chart(salesChartCanvas, {
                type: 'line',
                data: salesData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: '[ Price after discount ]',
                                color: 'darkgray' // Set the color of the y-axis title text to white
                            },
                            ticks: {
                                color: 'darkgray' // Set the color of the y-axis labels (ticks) to white
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: '[ Product Name ]',
                                color: 'darkgray' // Set the color of the x-axis title text to white
                            },
                            ticks: {
                                color: 'darkgray' // Set the color of the x-axis labels (ticks) to white
                            }
                        }
                    }
                }
            });
        });

    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main');
            const topbar = document.getElementById('topbar');

            if (sidebar.style.width === '250px') {
                sidebar.style.width = '0px';
                
                topbar.style.left = '0px';
                topbar.style.width = 'calc(100% - 0px)';
            } else {
                sidebar.style.width = '250px';
              
                topbar.style.left = '250px';

            }
        }

    </script>
</body>
</html>
<?php } ?>