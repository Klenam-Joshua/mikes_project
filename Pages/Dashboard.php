<div class="d-flex">
  <?php
  require "./classes/Student.php";
  require "./includes/Sidebar.php";

  // Fetch data from PHP
  $departmentsCount = $student->getDepartmentsCount();
  $studentsCount = $student->getStudentsCount();
  $facultiesCount = $student->getFacultiesCount();

  // Prepare data for JavaScript
 
  ?>

  <main class="" style="width:calc(100% - 16rem); margin-left:16rem;">
    <?php require "./includes/Header.php"; ?>

    <section class="px-3 bg-transparent mt-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="card text-white bg-primary">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">
                  <?php echo $departmentsCount; ?>
                  <span class="fs-6 fw-normal"></span>
                </div>
                <div>Departments</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"></div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">
                  <?php echo $studentsCount; ?>
                  <span class="fs-6 fw-normal">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                    </svg>
                  </span>
                </div>
                <div>Students</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart2" height="70" width="302" style="display: block; box-sizing: border-box; height: 70px; width: 302px;"></canvas>
              <div class="chartjs-tooltip" style="opacity: 0; left: 153.667px; top: 102.938px;">
                <table style="margin: 0px;">
                  <thead class="chartjs-tooltip-header">
                    <tr class="chartjs-tooltip-header-item" style="border-width: 0px;">
                      <th style="border-width: 0px;">May</th>
                    </tr>
                  </thead>
                  <tbody class="chartjs-tooltip-body">
                    <tr class="chartjs-tooltip-body-item">
                      <td style="border-width: 0px;">
                        <span style="background: rgb(51, 153, 255); border-color: rgba(255, 255, 255, 0.55); border-width: 2px; margin-right: 10px; height: 10px; width: 10px; display: inline-block;"></span>My First dataset: 34
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card text-white bg-warning">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">
                  <?php echo $facultiesCount; ?>
                  <span class="fs-6 fw-normal">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                    </svg>
                  </span>
                </div>
                <div>Faculties</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
              <canvas class="chart" id="card-chart3" height="70" width="334" style="display: block; box-sizing: border-box; height: 70px; width: 334px;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div>
      <canvas id="myChart"></canvas>
    </div>

    <!-- Load Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      // Pass PHP data to JavaScript
      const chartData = <?php echo json_encode($student->getGenderGroup()); 
       
      
      ?>;

      const ctx = document.getElementById('myChart').getContext('2d');
      new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: chartData.labels,
          datasets: [{
            label: '# of Entries',
            data: chartData.data,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Male,  and Faculties'
            }
          }
        }
      });
    </script>
  </main>
</div>
