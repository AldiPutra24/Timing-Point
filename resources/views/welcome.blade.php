<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/nm.png') }}" type="image/x-icon" />

    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Hamburger -->
    <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}" />
    <!-- bostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <title>TimingPoint | Master Your Tasks, Conquer Your Day</title>
  </head>

  <body id="home">
    <div class="animate__animated animate__fadeIn animate__delay-3s">
@include('partials.navbar')
    <!--   Header -->
    <div class="header">
      <div class="header-box">
        <div class="title">
          <h1 class="animate__animated animate__rubberBand animate__delay-1s">
            TimingP⭕int
          </h1>
          <p class="animate__animated animate__fadeInUp animate__delay-1s">
            Simplify Your Task Management and <br />
            Stay on Schedule.
          </p>
        </div>

        <div class="hero-img">
          <img src="{{ asset('assets/img/1.jpg') }}" alt="unsplash.com" />
          <img src="{{ asset('assets/img/2.jpg') }}" alt="unsplash.com" />
          <img src="{{ asset('assets/img/3.jpg') }}" alt="unsplash.com" />
          <img src="{{ asset('assets/img/4.jpg') }}" alt="unsplash.com" />
        </div>

        <div class="about" id="about">
          <div class="container">
            <h1>About Us</h1>
            <p>Welcome to our web-based todo list application! We are dedicated to providing you with a simple and efficient tool to manage your tasks and stay organized.</p>

            <div class="info">
              <div class="box">
                <h3>Easy Task Creation</h3>
                <h1 data-aos="zoom-in" data-aos-duration="1000">Quickly create tasks with a title, description, due date, and priority level.</h1>
                <button>Details</button>
              </div>
              <div class="box">
                <h3>Reminders and Notifications</h3>
                <h1 data-aos="zoom-in" data-aos-duration="1000">Stay on track with reminders and notifications for upcoming deadlines.</h1>
                <button>Details</button>
              </div>
              <div class="box">
                <h3>Progress Tracking</h3>
                <h1 data-aos="zoom-in" data-aos-duration="1000"> Monitor your progress and mark tasks as completed to stay motivated.</h1>
                <button>Details</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Header -->

    <!--  motivasi -->
    <div class="motivasi">
      <div class="container">
        <div class="motivasi-box">
          <h1>"Stay focused, stay determined, and cross off those tasks!"</h1>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b08968" fill-opacity="1" d="M0,192L26.7,208C53.3,224,107,256,160,234.7C213.3,213,267,139,320,90.7C373.3,43,427,21,480,42.7C533.3,64,587,128,640,128C693.3,128,747,64,800,58.7C853.3,53,907,107,960,144C1013.3,181,1067,203,1120,181.3C1173.3,160,1227,96,1280,80C1333.3,64,1387,96,1413,112L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
    <!--  motivasi -->

    <!--  Services -->
    <div class="services" id="services">
      <div class="container">
        <div class="services-box">
          <div class="box">
            <i class="fa-solid fa-book-journal-whills" data-aos="fade-up" data-aos-duration="1000"></i>
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">My Services</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Experience efficient task management with our web-based todo list service. Stay on track with deadline tracking, collaborate seamlessly with others, set task priorities, receive timely reminders, enjoy mobile accessibility, customize your experience, and rest assured knowing your data is secure. Our dedicated support team is here to assist you every step of the way.</p>
          </div>
          <div class="boxes">
            <div class="boxs">
              <img src="assets/img/1.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" />
              <div class="desc" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <h1>
                  Task <br />
                  Creation
                </h1>
                <p>
                  Easily create tasks with titles, descriptions, due dates, and priority levels.
                </p>
                <div class="fitur">
                  <button>Efficiency</button>
                  <button>Organization</button>
                  <button>Prioritization</button>
                </div>
              </div>
            </div>
            <div class="boxs">
              <div class="desc" data-aos="fade-up" data-aos-duration="1000">
                <h1>
                  Reminders <br />
                  Notifications
                </h1>
                <p>
                  Receive reminders and notifications to stay on top of upcoming deadlines.
                </p>
                <div class="fitur">
                  <button>Improved Time Management</button>
                  <button>Flexibility and Customization</button>
                </div>
              </div>
              <img src="{{ asset('assets/img/2.jpg') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" />
            </div>
            <div class="boxs">
              <img src="{{ asset('assets/img/3.jpg') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" />
              <div class="desc" data-aos="fade-up" data-aos-duration="1000">
                <h1>
                  User-friendly <br />
                  Interface
                </h1>
                <p>
                  Enjoy a visually appealing and intuitive interface for a pleasant user experience.
                </p>
                <div class="fitur">
                  <button>Intuitive Navigation</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b08968" fill-opacity="1" d="M0,192L26.7,208C53.3,224,107,256,160,234.7C213.3,213,267,139,320,90.7C373.3,43,427,21,480,42.7C533.3,64,587,128,640,128C693.3,128,747,64,800,58.7C853.3,53,907,107,960,144C1013.3,181,1067,203,1120,181.3C1173.3,160,1227,96,1280,80C1333.3,64,1387,96,1413,112L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    <!--  Services -->

    <!--  suggestion -->
    <div class="suggestion" id="suggestion">
      <div class="container">
        <div class="suggestion-box">
          <div class="box">
            <i class="fa-solid fa-envelope"></i>
            <h1>suggestion</h1>
            <p>Your Feedback Matters: Share Your Suggestions and Critiques</p>
          </div>
          <div class="form-suggestion">
            <form action="" method="post">
              <table>
                <tr>
                  <td>
                    <input type="text" name="First Name" placeholder="First Name" required autocomplete="off" />
                  </td>
                  <td>
                    <input type="text" name="Last Name" placeholder="Last Name" autocomplete="off" />
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><input type="email" name="Email" placeholder="Your Email" required autocomplete="off" style="width: 100%" /></td>
                </tr>
                <tr>
                  <td colspan="2">
                    <textarea name="Pesan" cols="30" rows="10" placeholder="Pesan..." required style="width: 100%"></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <button type="submit" onclick="return confirm('Apakah Anda ingin Mengirim Pesan & Saran?')">Kirim</button>
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--  suggestion -->

    {{-- Team --}}
    <div class="team" id="team">
        <div class="heading">
            <h1>OUR TEAM</h1>
            <p>Bersatu kita teguh bercerai kita runtuh</p>
        </div>
        <div class="main">
            <div class="person" style="--color: #E1D4BB"  data-aos="fade-down">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/jessi.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Jessica Vega</h3>
                <p>21.11.4356</p>
            </div>

            <div class="person" style="--color: #9DB2BF" data-aos="fade-down">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/aldi.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Aldi Putra</h3>
                <p>21.11.4369</p>
            </div>

            <div class="person" style="--color: #f6be80" data-aos="fade-down">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/fuguh1.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Fahrul Fuguh</h3>
                <p>21.11.4331</p>
            </div>

            <div class="person" style="--color: #c5c8ce" data-aos="fade-down">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/jonathan2.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Jonathan Adi</h3>
                <p>21.11.4356</p>
            </div>
        </div>
        <div class="main2" data-aos="fade-up"
        data-aos-anchor-placement="center-bottom">
            <div class="person" style="--color: #E1D4BB">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/gatan.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Gatan</h3>
                <p>21.11.4351</p>
            </div>

            <div class="person" style="--color: #bd9f7f">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/jundi2.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Jundi Robbani</h3>
                <p>21.11.4363</p>
            </div>

            <div class="person" style="--color: #af4056">
                <div class="container">
                    <div class="container-inner">
                        <div class="circle"></div>
                        <img src="{{ asset('assets/team/rico.png') }}">
                    </div>
                </div>
                <div class="divider"></div>
                <h2>UI/UX</h2>
                <h3>Ricardo Umbu</h3>
                <p>21.11.4380</p>
            </div>
        </div>
    </div>
    {{-- Team --}}

    @include('partials.footer')

    <!--  Preloader -->
    <div class="loader">
      <img src="assets/loader/Bean Eater-1s-104px.gif" alt="loading.io" />
    </div>
    <!--  Preloader -->

    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
