<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Short URL</title>
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css" />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/favicon-16x16.png"
      sizes="16x16"
    />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/android-chrome-192x192.png"
      sizes="192x192"
    />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/android-chrome-512x512.png"
      sizes="512x512"
    />
    <link rel="apple-touch-icon" href="./assets/dist/img/favicon/" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta
      name="msapplication-TileImage"
      content="./assets/dist/img/favicon/favicon.ico"
    />
  </head>
  <body>
    <!-- header -->
    <div class="container">
      <a
        href="/"
        class="d-flex align-items-center justify-content-center mb-1 mt-3 text-decoration-none mx-auto"
      >
        <img
          class="bi me-2"
          width="62"
          height="62"
          src="./assets/dist/img/logo.svg"
        />
      </a>
      <nav
        class="navbar navbar-expand-lg rounded py-3 mb-4 border-bottom"
        aria-label="Twelfth navbar example"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarsExample10"
            aria-controls="navbarsExample10"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="navbar-collapse justify-content-md-center collapse"
            id="navbarsExample10"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#pricing"
                  >Pricing</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Short Link List</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle disabled"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Account</a
                >
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- header -->

    <!-- url input -->
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-13 text-center">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
            Copy Paste Shorten
          </h1>
          <p class="fs-4">
            You can shorten the URL you want to shorten in seconds by copying
            and pasting it.
          </p>
        </div>
        <div class="col-lg-13 col-md-10 mx-auto">
          <div class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <div class="form-floating mb-3">
              <input
                type="url"
                class="form-control"
                id="getUrl"
                placeholder="https://example.com"
              />
              <label for="getUrl">Paste URL</label>
            </div>
            <div class="mb-3">
              <input type="url" class="form-control" id="shortUrl" disabled />
            </div>
            <button
              class="w-100 btn btn-lg btn-primary"
              type="submit"
              id="getUrlButton"
            >
              Shorten
            </button>
            <hr class="my-4" />
            <small class="text-body-secondary"
              >This site is not responsible for shortened URLs.</small
            >
          </div>
        </div>
      </div>
    </div>
    <!-- url input -->

    <!-- about -->
    <div class="container border-bottom" name="about">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <a name="about"></a>
        <h1 class="display-4 fw-normal">About</h1>
        <p class="fs-5 text-body-secondary">
          The URL Shortening Application is a tool that turns long web addresses
          into short and easy-to-share ones. This way, you can share the links
          you want with less characters on platforms such as social media, email
          or messaging. Moreover, the application provides you with statistics
          that show how many times your links were clicked and which countries
          they were accessed from. This way, you can track your web traffic and
          better understand your target audience. <br /><br />
          The URL Shortening Application is a simple and effective way to
          optimize your online presence and reach more people with less hassle.
          <br /><br />
          Warning: The link will be deleted after 1 hour, and it does not keep
          statistics because it is a test application.
        </p>
      </div>
    </div>
    <!-- about -->

    <!-- pricing -->
    <div class="container">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <a name="pricing"></a>
        <h1 class="display-4 fw-normal">Pricing</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col mx-auto">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">
                $0<small class="text-body-secondary fw-light">/mo</small>
              </h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Unlimited shortening</li>
                <li>The link will be deleted after 1 hour.</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">
                Get started
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- pricing -->

    <!-- footer -->
    <div class="container">
      <footer class="py-3 my-4">
        <a
          href="/"
          class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none mx-auto"
        >
          <img
            class="bi me-2"
            width="40"
            height="32"
            src="./assets/dist/img/logo.svg"
          />
        </a>
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item">
            <a href="/" class="nav-link px-2 text-body-secondary">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary disabled"
              >Features</a
            >
          </li>
          <li class="nav-item">
            <a href="#pricing" class="nav-link px-2 text-body-secondary"
              >Pricing</a
            >
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link px-2 text-body-secondary">About</a>
          </li>
        </ul>
        <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
      </footer>
    </div>
    <!-- footer -->

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document
        .getElementById("getUrlButton")
        .addEventListener("click", shortUrl);

      function shortUrl() {
        const getUrl = document.getElementById("getUrl").value;

        // * XMLHTTP create request
        let xhr = new XMLHttpRequest();

        // * request settings
        xhr.open("POST", "./api.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        // * request finished
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // * done
            const response = JSON.parse(xhr.responseText);
            document.getElementById("shortUrl").value = response;
          } else if (xhr.readyState === 4 && xhr.status !== 200) {
            //* err
            document.getElementById("shortUrl").value = "Error: " + xhr.status;
          }
        };

        // * request send
        const data = {
          url: getUrl,
        };
        xhr.send(JSON.stringify(data));
      }
    </script>
  </body>
</html>
