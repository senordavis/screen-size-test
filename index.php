<!DOCTYPE html>
<html>
    <head>
        <title>Screen Size Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
          body{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            font-weight: 300;
            background-color: #333;
          }

          .content {
            display: block;
            position: relative;
            width: 1920px;
            height: 1080px;
            margin: 0 auto;
          }

          .top {
            position: relative;
            z-index: 2;
          }

          .bottom {
            position: absolute;
            top: 983px;
            left: 27px;
            z-index: 1;
          }

          .url {
            padding: 27px;
            float: left;
          }

          .url input[type="text"] {
            min-height: 24px;
            min-width: 280px;
            background-color: transparent;
            border: 1px solid #888;
            padding: 5px 15px;
            color: white;
            border-radius: 8px;
          }

          .url input[type="submit"] {
            height: 36px;
            position: relative;
            left: 5px;
            border: 1px solid #888;
            border-radius: 8px;
            background-color: transparent;
            color: white;
            font-size: 12px;
            padding: 0 30px;
            line-height: 34px;
            cursor: pointer;
          }

          .url input[type="submit"]:hover {
            background-color: #007bff;
            border-color: #004FA3;
          }

          .mike {
            height: 48px;
            margin-right: -30px;
            position: relative;
            top: 15px;
          }

          button {
            height: 36px;
            padding: 0px 20px;
            background-color: transparent;
            color: white;
            border: 1px solid white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            line-height: 36px;
          }

          button:hover {
            background-color: #3DB54A;
            border: 1px solid #2D8436;
          }

          .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 3; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            text-align: center;
          }

          .modal-content {
            background-color: #fefefe;
            margin: 10% auto; /* 15% from the top and centered */
            padding: 50px;
            width: 480px;
            position: relative;
            border-radius: 8px;
          }

          .modal img {
            width: 64px;
          }

          .modal h1 {
            margin-top: 0;
          }

          .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 5px;
            right: 15px;
          }

          .close:hover, .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
          }

          .alert {
            position: relative;
            padding: .75rem 1.25rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            margin: 10px 0;
            top: 20px;
          }

          .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
          }

          .alert-danger .alert-link {
            color: #491217;
            text-decoration: none;
            font-weight: 500;
          }

          .alert-danger .alert-link:hover {
            text-decoration: underline;
          }

          .container p {
            position: absolute;
            left: -1px;
            bottom: -13px;
            padding: 15px;
            background: #222222;
            color: white;
            border-bottom-left-radius: 8px;
          }

          div {
            position: relative;
          }

          .container {
            display: block;
            padding: 50px;
            width: 3400px;
            transform: scale(0.5486);
            transform-origin: 0% 0%;
            position: absolute;
          }

          iframe {
            border: none !important;
            border-radius: 0px 0px 8px 8px;
            background-color: white;
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI0LjAuMywgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIGZvY3VzYWJsZT0iZmFsc2UiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiCgkgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6IzgwODA4MDt9Cgkuc3Qxe2ZpbGw6I0ZGRkZGRjt9Cjwvc3R5bGU+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTc2LDE2MGg0MGM2LjYsMCwxMi01LjQsMTItMTJ2LTQwYzAtNi42LTUuNC0xMi0xMi0xMkg3NmMtNi42LDAtMTIsNS40LTEyLDEydjQwQzY0LDE1NC42LDY5LjQsMTYwLDc2LDE2MHoKCQkgTTAsMjI0djIwOGMwLDI2LjUsMjEuNSw0OCw0OCw0OGg0MTZjMjYuNSwwLDQ4LTIxLjUsNDgtNDhWMjI0SDB6Ii8+Cgk8cGF0aCBkPSJNNDY0LDMySDQ4QzIxLjUsMzIsMCw1My41LDAsODB2MTQ0aDUxMlY4MEM1MTIsNTMuNSw0OTAuNSwzMiw0NjQsMzJ6IE0xMjgsMTQ4YzAsNi42LTUuNCwxMi0xMiwxMkg3NmMtNi42LDAtMTItNS40LTEyLTEyCgkJdi00MGMwLTYuNiw1LjQtMTIsMTItMTJoNDBjNi42LDAsMTIsNS40LDEyLDEyVjE0OHoiLz4KPC9nPgo8cGF0aCBjbGFzcz0ic3QxIiBkPSJNNDQ4LDE0OGMwLDYuNi01LjQsMTItMTIsMTJIMTg4Yy02LjYsMC0xMi01LjQtMTItMTJ2LTQwYzAtNi42LDUuNC0xMiwxMi0xMmgyNDhjNi42LDAsMTIsNS40LDEyLDEyVjE0OHoiLz4KPC9zdmc+Cg==);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 64px;
          }

          .first-row {
            display: grid;
            grid-column-gap: 61px;
            grid-template-columns: repeat(4, 1fr);
            align-items: end;
            margin-bottom: 50px;
          }

          .small-mobile iframe {
            width: 320px;
            height: 568px;
          }

          .mobile iframe {
            width: 375px;
            height: 667px;
          }

          .tablet-landscape iframe {
            width: 1024px;
            height: 768px;
          }

          .laptop iframe {
            width: 1366px;
            height: 768px;
          }

          .second-row {
            display: grid;
            grid-column-gap: 50px;
            grid-template-columns: repeat(3, 1fr);
            align-items: start;
          }

          .large-mobile iframe {
            width: 480px;
            height: 768px;
          }

          .tablet-portrait iframe {
            width: 768px;
            height: 1024px;
          }

          .desktop iframe {
            width: 1920px;
            height: 1024px;
          }
        </style>
    </head>

    <body>
      <div class="content">
        <section class="top">
          <div class="info">
            <div id="infoModal" class="modal">
              <div class="modal-content">
                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI0LjAuMywgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIGZvY3VzYWJsZT0iZmFsc2UiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiCgkgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6IzgwODA4MDt9Cgkuc3Qxe2ZpbGw6I0ZGRkZGRjt9Cjwvc3R5bGU+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTc2LDE2MGg0MGM2LjYsMCwxMi01LjQsMTItMTJ2LTQwYzAtNi42LTUuNC0xMi0xMi0xMkg3NmMtNi42LDAtMTIsNS40LTEyLDEydjQwQzY0LDE1NC42LDY5LjQsMTYwLDc2LDE2MHoKCQkgTTAsMjI0djIwOGMwLDI2LjUsMjEuNSw0OCw0OCw0OGg0MTZjMjYuNSwwLDQ4LTIxLjUsNDgtNDhWMjI0SDB6Ii8+Cgk8cGF0aCBkPSJNNDY0LDMySDQ4QzIxLjUsMzIsMCw1My41LDAsODB2MTQ0aDUxMlY4MEM1MTIsNTMuNSw0OTAuNSwzMiw0NjQsMzJ6IE0xMjgsMTQ4YzAsNi42LTUuNCwxMi0xMiwxMkg3NmMtNi42LDAtMTItNS40LTEyLTEyCgkJdi00MGMwLTYuNiw1LjQtMTIsMTItMTJoNDBjNi42LDAsMTIsNS40LDEyLDEyVjE0OHoiLz4KPC9nPgo8cGF0aCBjbGFzcz0ic3QxIiBkPSJNNDQ4LDE0OGMwLDYuNi01LjQsMTItMTIsMTJIMTg4Yy02LjYsMC0xMi01LjQtMTItMTJ2LTQwYzAtNi42LDUuNC0xMiwxMi0xMmgyNDhjNi42LDAsMTIsNS40LDEyLDEyVjE0OHoiLz4KPC9zdmc+Cg=="
                />

                <h1>Screen Size Test</h1>

                <p>This is a simple page to show what a given site looks like at different screen sizes. It will help you see what a site looks like on mobile, tablet, laptop, and desktop all at the same time.</p>

                <p>When entering a URL to test, you only need to enter the url as you would in your web browser. The url will be passed to the iframes using either HTTP or HTTPS as needed.</p>

                <p>Best window size to view all the frames is 1920 x 1080.</p>

                <p><a href="https://github.com/senordavis/screen-size-test" target="_blank"> Download the files on GitHub</a></p>

                <p class="alert alert-danger"><strong>Important:</strong> <br /> Due to security and an individual sites <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options" class="alert-link" target="_blank">X-Frame-Options</a> settings, some sites may not load.</p>

                <br />

                <span class="close">&times;</span>
              </div>
            </div>
          </div>

          <div class="url">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="text" name="url" placeholder="Type your URL without http or https" value="<?php renderURL(); ?>">
              <input type="submit" value="View Site">
            </form>
          </div>
        </section>

        <section class="bottom">
          <div>
            <img class="mike" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjAuMiwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAzNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6dXJsKCNTVkdJRF8xXyk7fQoJLnN0MXtmaWxsOnVybCgjU1ZHSURfMl8pO30KCS5zdDJ7ZmlsbDpub25lO3N0cm9rZTojNjkzOTE2O3N0cm9rZS13aWR0aDoyLjM5MTI7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO30KCS5zdDN7ZmlsbDp1cmwoI1NWR0lEXzNfKTt9Cgkuc3Q0e29wYWNpdHk6MC4yNTtmaWxsOnVybCgjU1ZHSURfNF8pO2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7fQoJLnN0NXtmaWxsOiM2OTNBMTg7fQoJLnN0NntvcGFjaXR5OjAuMTU7ZmlsbDp1cmwoI1NWR0lEXzVfKTtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgO30KCS5zdDd7ZmlsbDojRkZGRkZGO30KCS5zdDh7ZmlsbDp1cmwoI1NWR0lEXzZfKTt9Cgkuc3Q5e2ZpbGw6I0ZGRkZGRjtmaWxsLW9wYWNpdHk6MC4yNTMyO30KCS5zdDEwe2ZpbGw6I0ZGRkZGRjtmaWxsLW9wYWNpdHk6MC45MDEzO30KCS5zdDExe2ZpbGw6I0ZGRkZGRjtmaWxsLW9wYWNpdHk6MC43OTgzO30KCS5zdDEye2ZpbGw6dXJsKCNTVkdJRF83Xyk7fQoJLnN0MTN7b3BhY2l0eTowLjUwMjk7ZmlsbDp1cmwoI1NWR0lEXzhfKTtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgO30KCS5zdDE0e29wYWNpdHk6MC41MDI5O2ZpbGw6dXJsKCNTVkdJRF85Xyk7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDt9Cgkuc3QxNXtvcGFjaXR5OjAuMjU7ZmlsbDp1cmwoI1NWR0lEXzEwXyk7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDt9Cgkuc3QxNntmaWxsOnVybCgjU1ZHSURfMTFfKTt9Cgkuc3QxN3tjbGlwLXBhdGg6dXJsKCNTVkdJRF8xM18pO2ZpbGw6dXJsKCNTVkdJRF8xNF8pO30KCS5zdDE4e2ZpbGw6IzQ2MDIwNjt9Cgkuc3QxOXtmaWxsOnVybCgjU1ZHSURfMTVfKTt9Cgkuc3QyMHtmaWxsOiNGMDVCNDg7fQoJLnN0MjF7ZmlsbDp1cmwoI1NWR0lEXzE2Xyk7fQoJLnN0MjJ7b3BhY2l0eTowLjI1O2ZpbGw6dXJsKCNTVkdJRF8xN18pO2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7fQoJLnN0MjN7ZmlsbDojMUExQTFBO30KCS5zdDI0e29wYWNpdHk6MC4zNDk7ZmlsbDp1cmwoI1NWR0lEXzE4Xyk7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDt9Cgkuc3QyNXtvcGFjaXR5OjAuMzQ5O2ZpbGw6dXJsKCNTVkdJRF8xOV8pO2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7fQoJLnN0MjZ7b3BhY2l0eTowLjI0OTtmaWxsOnVybCgjU1ZHSURfMjBfKTtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgO30KCS5zdDI3e29wYWNpdHk6MC4yNDk7ZmlsbDp1cmwoI1NWR0lEXzIxXyk7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDt9Cgkuc3QyOHtvcGFjaXR5OjAuMjQ5O2ZpbGw6dXJsKCNTVkdJRF8yMl8pO2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7fQoJLnN0Mjl7b3BhY2l0eTowLjI0OTtmaWxsOnVybCgjU1ZHSURfMjNfKTtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgO30KPC9zdHlsZT4KPGc+Cgk8Zz4KCQkKCQkJPHJhZGlhbEdyYWRpZW50IGlkPSJTVkdJRF8xXyIgY3g9Ii01NjU5LjU3MTgiIGN5PSIzMzA3LjQ5MjIiIHI9IjIxLjEwMzIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoLTEuMDczOCAwLjEyMjYgMC4xMjI2IDEuMDczOCAtNjQ0Ni4yNTM5IC0yNzU1LjE1MzMpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiM4QzVGMjkiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6I0NCOUE2NiIvPgoJCTwvcmFkaWFsR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTM5LjcsNzYuNmMwLjMsMTAuNywxLjgsMjEuNiw2LjYsMzAuOGMtMC43LDAuMi0xLjUsMC40LTIuMiwwLjVjLTguNywxLTE2LjYtNS4yLTE3LjYtMTQKCQkJQzI1LjYsODUuNSwzMS41LDc3LjksMzkuNyw3Ni42eiIvPgoJCQoJCQk8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzJfIiBjeD0iMTA5Ni45Mjk4IiBjeT0iMzAyMy40NzA3IiByPSIxOS41NjA2IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDAuODg4NSA5LjU5MDAwMGUtMDIgLTkuNTkwMDAwZS0wMiAwLjg4ODUgLTUxNy44NSAtMjcwNy45MjgpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNBNDcwMkYiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6I0NCOUE2NiIvPgoJCTwvcmFkaWFsR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MSIgZD0iTTE2Ni4zLDYzLjVjMS40LDkuNCwxLjcsMTkuMi0xLDI4YzAuNywwLjEsMS4zLDAuMSwyLDAuMWM3LjctMC41LDEzLjctNy4xLDEzLjItMTUKCQkJQzE4MCw2OS4yLDE3My43LDYzLjQsMTY2LjMsNjMuNXoiLz4KCQk8cGF0aCBjbGFzcz0ic3QyIiBkPSJNMzAuOSw5MS4zYzAuMy01LjUsNy4zLTkuMiwxMy44LTguNCIvPgoJCTxwYXRoIGNsYXNzPSJzdDIiIGQ9Ik00NS4yLDg5LjhjLTE0LjctMi45LTcuMywxNi41LDEsOSIvPgoJCTxwYXRoIGNsYXNzPSJzdDIiIGQ9Ik0xNzYuMyw3NWMtMS4xLTQuOC03LjgtNi45LTEzLjQtNS4yIi8+CgkJPHBhdGggY2xhc3M9InN0MiIgZD0iTTE2My43LDc2YzEyLjQtNC44LDguOSwxMy40LDAuNSw4Ii8+CgkJCgkJCTxyYWRpYWxHcmFkaWVudCBpZD0iU1ZHSURfM18iIGN4PSItNDM1OS42MjA2IiBjeT0iMjQ5My4yNzUxIiByPSI2Mi44NjQ3IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC0xLjcyNzYgMC41NzI3IDAuNTM5OSAxLjgzMjMgLTg4MjAuMDczMiAtMTk1NS4zOTk0KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgoJCQk8c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojQTQ3MDJGIi8+CgkJCTxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNDQjlBNjYiLz4KCQk8L3JhZGlhbEdyYWRpZW50PgoJCTxwYXRoIGNsYXNzPSJzdDMiIGQ9Ik0xNjguNCw3MS42QzE2NS4zLDQ2LjcsMTQwLjMsMTEsOTMsMjEuOGMtMzEuNiw3LjEtNjIsMzcuMS01MS43LDc1YzcsMjUuOSwzMC43LDQwLjYsNTcuMSw0MC45CgkJCUMxNDYuNSwxMzguMiwxNzEuNSw5Ni4xLDE2OC40LDcxLjZ6Ii8+CgkJCgkJCTxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfNF8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNTEwLjAyODYiIHkxPSIzMTE1LjQ4NTQiIHgyPSI2MTIuOTMxIiB5Mj0iMzA2Ny45NDMxIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDAuOTQyOCAwIDAgMSAtNDQxLjk5NzkgLTMwMzkuODE0NSkiPgoJCQk8c3RvcCAgb2Zmc2V0PSIwLjU2MzkiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDAiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzU4MzIxOCIvPgoJCTwvbGluZWFyR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0NCIgZD0iTTEwOS42LDE5LjdjLTUuMiwwLTEwLjcsMC42LTE2LjcsMmMtMjYuNiw2LTUyLjMsMjguMS01My42LDU3LjdjMTIuMiwwLDEuNS0zNC42LDMxLjUtNDMuNQoJCQljOS41LTIuOCwyNy44LDEuNywzNy40LTAuNmMxOS45LTQuOSwyNi45LTEwLjMsMzctMS4yYzQuOCw0LjQsOSwxMS45LDEzLjgsMTIuNEMxNDkuNCwzMiwxMzMsMTkuNywxMDkuNiwxOS43eiIvPgoJCTxnPgoJCQk8cGF0aCBjbGFzcz0ic3Q1IiBkPSJNMTIxLjksOTQuMWMtMSwyLjEtMi44LDMuOC00LjgsNWMtMC41LDAuMy0xLDAuNS0xLjYsMC44bC0xLjcsMC42Yy0wLjYsMC4yLTEuMSwwLjMtMS43LDAuNAoJCQkJcy0xLjIsMC4yLTEuOCwwLjNjLTEuMiwwLjEtMi40LDAuMS0zLjUtMC4xYy0xLjItMC4yLTIuMy0wLjQtMy40LTAuOWMtMi4yLTAuOS00LjItMi4zLTUuNC00LjRsMCwwdi0wLjFsMCwwCgkJCQljMS42LDEuNSwzLjYsMi41LDUuNiwzYzIuMSwwLjYsNC4zLDAuNyw2LjQsMC41czQuMy0wLjcsNi4zLTEuNWMyLTAuOSwzLjgtMi4xLDUuMy0zLjdMMTIxLjksOTQuMUMxMjIsOTQsMTIyLDk0LDEyMS45LDk0LjEKCQkJCUwxMjEuOSw5NC4xeiIvPgoJCTwvZz4KCQkKCQkJPHJhZGlhbEdyYWRpZW50IGlkPSJTVkdJRF81XyIgY3g9IjMyLjQzMDciIGN5PSItMjE4My42MTY1IiByPSIxMi43NTU2IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEuMDA1NCAwIDAgLTEuMDA1NCAxOC45MDg5IC0yMTAyLjczMjkpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAuNTYzOSIgc3R5bGU9InN0b3AtY29sb3I6IzgwMzcxQSIvPgoJCQk8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojOUM1NzI3Ii8+CgkJPC9yYWRpYWxHcmFkaWVudD4KCQk8cGF0aCBjbGFzcz0ic3Q2IiBkPSJNNTAuMyw5NS42Yy0wLjItMC42LTAuNy0wLjktMS4zLTAuN2MtMC42LDAuMi0wLjksMC43LTAuNywxLjNjMC4yLDAuNiwwLjcsMC45LDEuMywwLjcKCQkJQzUwLjIsOTYuOCw1MC41LDk2LjIsNTAuMyw5NS42eiBNNTIsOTljLTAuMi0wLjYtMC43LTAuOS0xLjMtMC43Yy0wLjYsMC4yLTAuOSwwLjctMC43LDEuM2MwLjIsMC42LDAuOCwwLjksMS4zLDAuNwoJCQlDNTEuOSwxMDAuMSw1Mi4yLDk5LjYsNTIsOTl6IE01NS44LDk5Yy0wLjItMC42LTAuNy0wLjktMS4zLTAuN2MtMC42LDAuMi0wLjksMC43LTAuNywxLjNjMC4yLDAuNiwwLjcsMC45LDEuMywwLjcKCQkJQzU1LjcsMTAwLjIsNTYsOTkuNiw1NS44LDk5eiBNNTMuOSw5NS41Yy0wLjItMC42LTAuNy0wLjktMS4zLTAuN2MtMC42LDAuMi0wLjksMC43LTAuNywxLjNjMC4yLDAuNiwwLjcsMC45LDEuMywwLjcKCQkJQzUzLjcsOTYuNyw1NC4xLDk2LjEsNTMuOSw5NS41eiBNNTguNyw5NmMtMC4yLTAuNi0wLjctMC45LTEuMy0wLjdjLTAuNiwwLjItMC45LDAuNy0wLjcsMS4zYzAuMiwwLjYsMC43LDAuOSwxLjMsMC43CgkJCUM1OC41LDk3LjIsNTguOSw5Ni42LDU4LjcsOTZ6Ii8+CgkJPGc+CgkJCTxwYXRoIGNsYXNzPSJzdDciIGQ9Ik0xMzYuMyw4Ny4zYy03LTAuMi0xMi42LTYtMTIuNC0xMy4xYzAuMi03LDYtMTIuNiwxMy4xLTEyLjRjNywwLjIsMTIuNiw2LDEyLjQsMTMuMQoJCQkJQzE0OS4yLDgyLDE0My40LDg3LjUsMTM2LjMsODcuM3oiLz4KCQkJCgkJCQk8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzZfIiBjeD0iLTQ2MTUuNzg1NiIgY3k9IjEyMjYuOTM5MyIgcj0iNS4zMTM4IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC0xLjM3OTEgLTEuOTQ5IDEuOTQ5IC0xLjM3OTEgLTg2MTYuMTM5NiAtNzIyOC41NTc2KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgoJCQkJPHN0b3AgIG9mZnNldD0iMC4zOTQ3IiBzdHlsZT0ic3RvcC1jb2xvcjojNjQzMDE2Ii8+CgkJCQk8c3RvcCAgb2Zmc2V0PSIwLjc4MiIgc3R5bGU9InN0b3AtY29sb3I6IzMxMTkwRSIvPgoJCQk8L3JhZGlhbEdyYWRpZW50PgoJCQk8cGF0aCBjbGFzcz0ic3Q4IiBkPSJNMTQ0LjIsODIuOWMtMy45LDIuOC05LjUsMS43LTEyLjUtMi4zYy0yLjktNC4xLTItOS43LDEuOS0xMi41czkuNS0xLjcsMTIuNSwyLjMKCQkJCUMxNDksNzQuNSwxNDguMSw4MC4xLDE0NC4yLDgyLjl6Ii8+CgkJCTxwYXRoIGNsYXNzPSJzdDkiIGQ9Ik0xNDYuOSw3N2MtMC44LDMuMS00LjYsNi4xLTQuNiw2LjFzMC0xLjUsMi00LjhjMCwwLTEuNSwzLjEtNSw1YzAsMCwxLjQtMi45LDMuMS00LjVjMCwwLTEuMSwxLjktNi4xLDMuOAoJCQkJYzAsMCwxLjMtMi4yLDQuNC0zLjljMCwwLTMuNiwyLjgtNy4zLDNjMCwwLDEuNS0xLjcsNi0zLjRjMCwwLTQsMS43LTcuMywxLjVjMCwwLDMuMy0yLDYtMi40YzAsMC01LjIsMC42LTcuNC0wLjIKCQkJCWMwLDAsMi4yLTEuNyw4LTAuN2MwLDAtNS44LTEuMS04LjUtMi44YzAsMCwzLjktMSw4LjIsMS40YzAsMC00LjgtMi02LjYtNC4yYzAsMCwzLDAuMiw2LjYsMi45YzAsMC0zLjktMi42LTQuNC00LjgKCQkJCWMwLDAsMS45LDAuNSw1LjMsMy45YzAsMC0zLjEtNC0zLjEtNS4zYzAsMCwxLjMtMC40LDMuOCw0LjljMCwwLTEuNi0yLjgtMS01YzAsMCwyLDEuMywxLjcsNC43YzAsMC0wLjQtMy4yLDAuNS00LjUKCQkJCWMwLDAsMS42LDAuOCwxLjUsNC42YzAsMCwwLTIuMSwxLjQtMi42YzAsMCwwLjgsMC40LDAuMiwzYzAsMCwwLjMtMS4yLDEuMS0xLjdDMTQ1LjUsNzAuNywxNDcuNyw3My45LDE0Ni45LDc3eiIvPgoJCQk8cGF0aCBkPSJNMTQ0LjcsODAuMmMtMi40LDEuNy01LjgsMS4yLTcuNS0xLjJjLTEuNy0yLjQtMS4xLTUuNywxLjQtNy41YzIuNC0xLjcsNS44LTEuMiw3LjUsMS4yCgkJCQlDMTQ3LjgsNzUuMSwxNDcuMiw3OC41LDE0NC43LDgwLjJ6Ii8+CgkJCTxwYXRoIGNsYXNzPSJzdDEwIiBkPSJNMTM3LjYsNzYuNmMtMS40LDAtMi41LTEuMi0yLjUtMi42czEuMi0yLjUsMi42LTIuNWMxLjQsMCwyLjUsMS4yLDIuNSwyLjYKCQkJCUMxNDAuMyw3NS42LDEzOS4xLDc2LjcsMTM3LjYsNzYuNnoiLz4KCQkJPHBhdGggY2xhc3M9InN0MTEiIGQ9Ik0xNDIuOCw3MS45Yy0wLjYsMC0xLjEtMC42LTEuMS0xLjJzMC42LTEuMSwxLjItMS4xYzAuNiwwLDEuMSwwLjYsMS4xLDEuMlMxNDMuNSw3MS45LDE0Mi44LDcxLjl6Ii8+CgkJPC9nPgoJCTxnPgoJCQk8cGF0aCBjbGFzcz0ic3Q3IiBkPSJNNzQuOSw5NmMtOS45LDAtMTgtNy45LTE4LTE3LjlzNy45LTE4LDE3LjktMThzMTgsNy45LDE4LDE3LjlDOTIuOSw4Ny44LDg0LjgsOTUuOSw3NC45LDk2eiIvPgoJCQkKCQkJCTxyYWRpYWxHcmFkaWVudCBpZD0iU1ZHSURfN18iIGN4PSIzMzUuNzM0NiIgY3k9IjMxMDYuMDQwNSIgcj0iMTYuNjY1NiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxLjAwNTQgMCAwIDEuMDA1NCAtMjU2LjYzNTYgLTMwNDMuODExOCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KCQkJCTxzdG9wICBvZmZzZXQ9IjAuMzk0NyIgc3R5bGU9InN0b3AtY29sb3I6IzY0MzAxNiIvPgoJCQkJPHN0b3AgIG9mZnNldD0iMC43ODIiIHN0eWxlPSJzdG9wLWNvbG9yOiMzMTE5MEUiLz4KCQkJPC9yYWRpYWxHcmFkaWVudD4KCQkJPHBhdGggY2xhc3M9InN0MTIiIGQ9Ik04NS44LDg5LjJjLTUuNCw0LjEtMTMuNCwyLjktMTcuNy0yLjdzLTMuMy0xMy42LDIuMS0xNy44YzUuNC00LjEsMTMuNC0yLjksMTcuNywyLjcKCQkJCUM5Mi4zLDc3LjEsOTEuMiw4NS4xLDg1LjgsODkuMnoiLz4KCQkJPHBhdGggY2xhc3M9InN0OSIgZD0iTTg5LjIsODAuN2MtMSw0LjQtNi4yLDguOC02LjIsOC44cy0wLjEtMi4xLDIuNi02LjljMCwwLTEuOSw0LjUtNi44LDcuMmMwLDAsMS45LTQuMiw0LjItNi41CgkJCQljMCwwLTEuNSwyLjgtOC41LDUuN2MwLDAsMS43LTMuMiw2LTUuOGMwLDAtNC45LDQuMS0xMC4xLDQuNmMwLDAsMi0yLjUsOC40LTUuMWMwLDAtNS42LDIuNi0xMC4yLDIuNWMwLDAsNC42LTIuOSw4LjMtMy42CgkJCQljMCwwLTcuMywxLjItMTAuNSwwYzAsMCwzLTIuNSwxMS4zLTEuNGMwLDAtOC4yLTEuMy0xMi4yLTMuNmMwLDAsNS41LTEuNiwxMS44LDEuNmMwLDAtNi45LTIuNi05LjYtNS42YzAsMCw0LjIsMC4xLDkuNSwzLjcKCQkJCWMwLDAtNS42LTMuNS02LjQtNi41YzAsMCwyLjcsMC42LDcuNyw1LjJjMCwwLTQuNi01LjUtNC42LTcuNGMwLDAsMS45LTAuNiw1LjUsNi43YzAsMC0yLjQtMy45LTEuNi03YzAsMCwyLjgsMS44LDIuNyw2LjYKCQkJCWMwLDAtMC42LTQuNiwwLjUtNi40YzAsMCwyLjMsMS4xLDIuMyw2LjRjMCwwLDAtMywxLjgtMy44YzAsMCwxLjEsMC41LDAuNCw0LjJjMCwwLDAuNC0xLjcsMS41LTIuNUM4Nyw3MS45LDkwLjIsNzYuMyw4OS4yLDgwLjcKCQkJCXoiLz4KCQkJPHBhdGggZD0iTTg2LjQsODUuNGMtMy40LDIuNi04LjEsMi0xMC42LTEuM3MtMS44LTgsMS42LTEwLjZzOC4xLTIsMTAuNiwxLjNDOTAuNSw3OC4xLDg5LjcsODIuOCw4Ni40LDg1LjR6Ii8+CgkJCTxwYXRoIGNsYXNzPSJzdDEwIiBkPSJNNzYuMiw4MC43Yy0yLDAtMy42LTEuNi0zLjYtMy42czEuNi0zLjYsMy42LTMuNnMzLjYsMS42LDMuNiwzLjZTNzguMiw4MC43LDc2LjIsODAuN3oiLz4KCQkJPHBhdGggY2xhc3M9InN0MTEiIGQ9Ik04My4zLDczLjdjLTAuOSwwLTEuNi0wLjctMS42LTEuNnMwLjctMS42LDEuNi0xLjZzMS42LDAuNywxLjYsMS42Qzg1LDczLDg0LjIsNzMuNyw4My4zLDczLjd6Ii8+CgkJPC9nPgoJCQoJCQk8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzhfIiBjeD0iLTU5OTguOTMzNiIgY3k9IjMzNDYuMjQ3MyIgcj0iMjAuOTUyMiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgtMS4wMDIgOC4yNDAwMDBlLTAyIDguMjQwMDAwZS0wMiAxLjAwMiAtNjE1OC41MjU0IC0yNzk3LjMxMTgpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAuNTYzOSIgc3R5bGU9InN0b3AtY29sb3I6IzNDMUUwRSIvPgoJCQk8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojNTgzMjE4Ii8+CgkJPC9yYWRpYWxHcmFkaWVudD4KCQk8cGF0aCBjbGFzcz0ic3QxMyIgZD0iTTE1NS41LDU5LjRjMCwwLTkuMy00LjYtMjIuNy0xLjlDMTIzLjQsNTkuMywxMzYsNDAuOSwxNTUuNSw1OS40eiIvPgoJCQoJCQk8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzlfIiBjeD0iMTU5LjM5NCIgY3k9IjMyODAuMDcwMyIgcj0iMjYuMzMxNiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxLjAwMzggLTUuNzQwMDAwZS0wMiA1Ljc0MDAwMGUtMDIgMS4wMDM4IC0yOTMuNDA0MyAtMzIxOS44Njk2KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgoJCQk8c3RvcCAgb2Zmc2V0PSIwLjU2MzkiIHN0eWxlPSJzdG9wLWNvbG9yOiMzQzFFMEUiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzU4MzIxOCIvPgoJCTwvcmFkaWFsR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MTQiIGQ9Ik01Ny4zLDYxLjdjMCwwLDguNS01LjgsMjIuMi01Qzg5LjEsNTcuMyw3NC4xLDQwLjcsNTcuMyw2MS43eiIvPgoJPC9nPgoJCgkJPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xMF8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTkxOTMuNTc0MiIgeTE9Ii0zNzU5LjAyNzgiIHgyPSItOTA4Ny41NDk4IiB5Mj0iLTM4MDguMDEyIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC0wLjk0MjggMCAwIC0xIC04NTAzLjUyNjQgLTM2OTIuOTYxMikiPgoJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiM1ODMyMTgiLz4KCQk8c3RvcCAgb2Zmc2V0PSIwLjQzNjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDAiLz4KCTwvbGluZWFyR3JhZGllbnQ+Cgk8cGF0aCBjbGFzcz0ic3QxNSIgZD0iTTk4LjQsMTM3LjVjNDEuNSwwLDcxLjQtMzMuNyw3MC02NC43Yy03LTEuMy0xNC4zLDM0LjQtMjMsMzQuNHMtMTMuNC04LTM2LjEtOHMtMzUuMiw3LjctNDcuMiw3LjcKCQlTNDQuNyw3OC4yLDM5LjQsNzkuNkMzOS40LDEzMC41LDg3LjEsMTM3LDk4LjQsMTM3LjV6Ii8+Cgk8Zz4KCQkKCQkJPHJhZGlhbEdyYWRpZW50IGlkPSJTVkdJRF8xMV8iIGN4PSIxMzIuMzQyMiIgY3k9Ii0yMjE2LjYwMyIgcj0iNjEuMzQ1NSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIC0yMTA0KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgoJCQk8c3RvcCAgb2Zmc2V0PSI3LjE0Mjg2MGUtMDIiIHN0eWxlPSJzdG9wLWNvbG9yOiNENjIwM0UiLz4KCQkJPHN0b3AgIG9mZnNldD0iMC43OTMyIiBzdHlsZT0ic3RvcC1jb2xvcjojODAxNDI2Ii8+CgkJPC9yYWRpYWxHcmFkaWVudD4KCQk8cGF0aCBjbGFzcz0ic3QxNiIgZD0iTTcxLjcsMTA5LjFoNjMuN2MwLDAtNS40LDIzLjUtMzEuOCwyMy41Qzc3LDEzMi41LDcxLjcsMTA5LjEsNzEuNywxMDkuMXoiLz4KCQk8Zz4KCQkJPGc+CgkJCQk8Zz4KCQkJCQk8Zz4KCQkJCQkJPGc+CgkJCQkJCQk8ZGVmcz4KCQkJCQkJCQk8cGF0aCBpZD0iU1ZHSURfMTJfIiBkPSJNNzEuNywxMDkuMWg2My43YzAsMC01LjQsMjMuNS0zMS44LDIzLjVDNzcsMTMyLjUsNzEuNywxMDkuMSw3MS43LDEwOS4xeiIvPgoJCQkJCQkJPC9kZWZzPgoJCQkJCQkJPGNsaXBQYXRoIGlkPSJTVkdJRF8xM18iPgoJCQkJCQkJCTx1c2UgeGxpbms6aHJlZj0iI1NWR0lEXzEyXyIgIHN0eWxlPSJvdmVyZmxvdzp2aXNpYmxlOyIvPgoJCQkJCQkJPC9jbGlwUGF0aD4KCQkJCQkJCQoJCQkJCQkJCTxyYWRpYWxHcmFkaWVudCBpZD0iU1ZHSURfMTRfIiBjeD0iLTEwNzAuNTE3OCIgY3k9IjIzNjkuNjIzIiByPSIzNy42NTc2IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEuNDY3OCAwIDAgMSAxNjg1LjY0NzUgLTIyNTYpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CgkJCQkJCQkJPHN0b3AgIG9mZnNldD0iNy4xNDI4NjBlLTAyIiBzdHlsZT0ic3RvcC1jb2xvcjojQjQwNDBGIi8+CgkJCQkJCQkJPHN0b3AgIG9mZnNldD0iMC43OTMyIiBzdHlsZT0ic3RvcC1jb2xvcjojNDYwMjA2Ii8+CgkJCQkJCQk8L3JhZGlhbEdyYWRpZW50PgoJCQkJCQkJPGVsbGlwc2UgY2xhc3M9InN0MTciIGN4PSIxMDQuNiIgY3k9IjEyMS44IiByeD0iMjEuNSIgcnk9IjE0LjciLz4KCQkJCQkJPC9nPgoJCQkJCTwvZz4KCQkJCTwvZz4KCQkJPC9nPgoJCTwvZz4KCQk8cGF0aCBjbGFzcz0ic3QxOCIgZD0iTTEwMC42LDExNi4yVjExNmgtMi43aC0yLjd2MC4yYzAuOSwwLjQsMS42LDEuMywxLjYsMi40YzAsMC43LTAuMywxLjQtMC44LDEuOXMtMC44LDEuMi0wLjgsMS45CgkJCWMwLDEuNSwxLjIsMi43LDIuNywyLjdzMi43LTEuMiwyLjctMi43YzAtMC43LTAuMy0xLjQtMC44LTEuOXMtMC44LTEuMi0wLjgtMS45Qzk5LjEsMTE3LjUsOTkuNywxMTYuNiwxMDAuNiwxMTYuMnoiLz4KCQkKCQkJPHJhZGlhbEdyYWRpZW50IGlkPSJTVkdJRF8xNV8iIGN4PSIxMDMuMzY1NSIgY3k9Ii0yMjE3LjYxNTIiIHI9IjM4LjY2ODIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgMCAtMjEwNCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KCQkJPHN0b3AgIG9mZnNldD0iMC4zODM1IiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+CgkJCTxzdG9wICBvZmZzZXQ9IjAuMzkxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkNGREZGIi8+CgkJCTxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNBMEQ5RjYiLz4KCQk8L3JhZGlhbEdyYWRpZW50PgoJCTxwYXRoIGNsYXNzPSJzdDE5IiBkPSJNMTA0LDExNy43YzI4LDAsMjguMy0xLjQsMjguMy0xLjRjMi4zLTQuMSwzLTcuMywzLTcuM0g3MS43YzAsMCwwLjcsMy4xLDIuOCw3Qzc0LjUsMTE2LDc2LDExNy43LDEwNCwxMTcuNwoJCQl6Ii8+CgkJPHBhdGggY2xhc3M9InN0MjAiIGQ9Ik05MS44LDEzMC44YzMuNCwxLjEsNy4yLDEuOCwxMS43LDEuOGMzLjUsMCw2LjYtMC40LDkuNC0xLjFjLTEtMi43LTUuNC00LjctMTAuNy00LjcKCQkJQzk3LjMsMTI2LjksOTMuMiwxMjguNSw5MS44LDEzMC44eiIvPgoJCQoJCQk8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzE2XyIgY3g9IjEwNy4xMjc5IiBjeT0iLTIyMzIuMTM3OSIgcj0iMTEuMzg2OCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIC0yMTA0KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgoJCQk8c3RvcCAgb2Zmc2V0PSI3LjE0Mjg2MGUtMDIiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAuNDAzNCIvPgoJCQk8c3RvcCAgb2Zmc2V0PSIwLjc5MzIiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz4KCQk8L3JhZGlhbEdyYWRpZW50PgoJCTxwYXRoIGNsYXNzPSJzdDIxIiBkPSJNOTEuOCwxMzAuOGMzLjQsMS4xLDcuMiwxLjgsMTEuNywxLjhjMy41LDAsNi42LTAuNCw5LjQtMS4xYy0xLTIuNy01LjQtNC43LTEwLjctNC43CgkJCUM5Ny4zLDEyNi45LDkzLjIsMTI4LjUsOTEuOCwxMzAuOHoiLz4KCTwvZz4KCTxnPgoJCQoJCQk8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzE3XyIgY3g9IjM5LjQzNTYiIGN5PSItMjE4MS42ODMzIiByPSIxMzEuNTYzOSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIC0yMTA0KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgoJCQk8c3RvcCAgb2Zmc2V0PSIwLjU2MzkiIHN0eWxlPSJzdG9wLWNvbG9yOiM4MDM3MUEiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzlDNTcyNyIvPgoJCTwvcmFkaWFsR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MjIiIGQ9Ik0xNjcuNiw2MS42Yy0xLjEtMC4xLTcuNi0wLjUtMTUuNy0wLjRjLTEzLjYsMC4xLTMxLjcsMS4yLTM2LjgsNS45Yy00LjYsNC4zLTMuNSw0LjEtNy4xLDQuMwoJCQljLTMuNiwwLjItMS45LDAuNS03LjMtMy41Yy04LjgtNi42LTUwLTAuNC01Mi44LDAuM2MtMC42LDAuMi0xLjEsMC43LTEuNSwxLjVsLTYuNywzLjZjMCwwLTAuNiw2LjEtMC4yLDkuNmw3LjItMi42bDAsMAoJCQljMC42LDAuMiwxLjctMC4zLDIuNiwxLjRjMSwxLjksMSwyLjYsMi4yLDZjMi44LDcuNywxMi4xLDYuNCwxMi4xLDYuNEw5MSw5Mi43YzguOC0wLjYsMTAuMS03LjQsMTEuOS0xMS45CgkJCWMxLjMtMy40LDIuNC00LjMsNS4zLTQuNGMyLjktMC4yLDQuMSwwLDYuMSwzLjhjMi4yLDQuMyw0LjIsMTAuOSwxMywxMC41bDI3LjQtMS42YzAsMCw5LjMsMC4zLDExLjMtNy43YzAuOS0zLjUsMC44LTQuMiwxLjYtNi4yCgkJCWMwLjktMi4zLDIuNS0xLDIuOC0yLjFDMTcxLjYsNjkuNSwxNzAuMyw2MiwxNjcuNiw2MS42eiBNMTAxLjcsNzQuNUMxMDAuOSw4MCw5OS4yLDkwLjYsODcsOTAuOWwtMjMsMC45YzAsMC0xMC40LDEtMTEuNy03LjkKCQkJYy0xLjItOC0wLjctOS44LTAuNy05LjhzLTAuOC00LjgsOS43LTUuNGMwLDAsMTIuOC0xLjcsMjguNy0xLjZDOTQuNSw2Ny4xLDEwMi40LDY4LjksMTAxLjcsNzQuNXogTTE2NSw3Ny43CgkJCWMtMC40LDktMTAuOSw5LjItMTAuOSw5LjJsLTIyLjksMS42Yy0xMi4yLDEuMS0xNS05LjMtMTYuMy0xNC43Yy0xLjMtNS40LDYuNC04LjEsMTAuOS04LjZjMTEuOS0xLjQsMjIuMS0xLjYsMjYuNS0xLjYKCQkJYzEuNSwwLDIuMywwLDIuMywwYzEwLjUtMC42LDEwLjEsNC4zLDEwLjEsNC4zUzE2NS4zLDY5LjYsMTY1LDc3Ljd6Ii8+CgkJPHBhdGggY2xhc3M9InN0MjMiIGQ9Ik0xNTEuOSw1OS44Yy0xMy42LDAuMS0zMS43LDEuMi0zNi44LDUuOGMtNC42LDQuMi0zLjUsNC03LjEsNC4ycy0xLjksMC41LTcuMy0zLjRjLTguOC02LjUtNTAtMC40LTUyLjgsMC4zCgkJCWMtMi43LDAuNi0zLjEsOC4xLTEuNiwxMS40YzAuNSwxLjEsMS45LTAuNCwzLDEuN2MxLDEuOSwxLDIuNSwyLjIsNS44YzIuOCw3LjUsMTIsNi4zLDEyLDYuM0w5MSw5MC41YzguOC0wLjYsMTAuMS03LjIsMTEuOS0xMS42CgkJCWMxLjMtMy4zLDIuNC00LjIsNS4zLTQuM2MyLjktMC4xLDQuMSwwLDYuMSwzLjdjMi4yLDQuMiw0LjIsMTAuNiwxMywxMC4ybDI3LjQtMS42YzAsMCw5LjMsMC4zLDExLjMtNy41YzAuOS0zLjQsMC44LTQuMSwxLjYtNgoJCQljMC45LTIuMywyLjUtMC45LDIuOC0yLjFjMS4xLTMuNC0wLjEtMTAuOC0yLjgtMTEuMUMxNjYuNiw2MC4xLDE2MC4xLDU5LjgsMTUxLjksNTkuOHogTTE1Mi4yLDYyLjFjMS41LDAsMi4zLDAsMi4zLDAKCQkJYzEwLjUtMC42LDEwLjEsNC4yLDEwLjEsNC4yczAuNywxLjcsMC4zLDkuNmMtMC40LDguOC0xMC45LDguOS0xMC45LDguOWwtMjIuOSwxLjZjLTEyLjIsMS0xNS05LTE2LjMtMTQuM3M2LjQtNy45LDEwLjktOC40CgkJCUMxMzcuNiw2Mi4zLDE0Ny45LDYyLjEsMTUyLjIsNjIuMXogTTg5LjksNjUuNmM0LjUsMCwxMi41LDEuOCwxMS43LDcuMmMtMC43LDUuNC0yLjUsMTUuNy0xNC43LDE2bC0yMywwLjljMCwwLTEwLjQsMS0xMS43LTcuNwoJCQljLTEuMi03LjgtMC43LTkuNi0wLjctOS42cy0wLjgtNC43LDkuNy01LjNDNjEuMiw2Ny4xLDc0LDY1LjUsODkuOSw2NS42eiIvPgoJCQoJCQk8bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzE4XyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI2NTUuNzA2OCIgeTE9IjMzOTUuNzA2NSIgeDI9IjcxMC44Mjg2IiB5Mj0iMzM5NS43MDY1IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDAuOTEzNiAtMS4yMDAwMDBlLTAyIDEuMDYwMDAwZS0wMiAwLjkxNTYgLTUyMC4yNTE2IC0zMDI2LjYyMTMpIj4KCQkJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPgoJCQk8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+CgkJPC9saW5lYXJHcmFkaWVudD4KCQk8cGF0aCBjbGFzcz0ic3QyNCIgZD0iTTE1NC41LDYyLjFjMCwwLTEyLjktMC4zLTI4LjcsMS42Yy00LjUsMC41LTEyLjIsMy4xLTEwLjksOC40YzEuMyw1LjMsNC4xLDE1LjQsMTYuMywxNC4zbDIyLjktMS42CgkJCWMwLDAsMTAuNC0wLjIsMTAuOS04LjljMC40LTcuOS0wLjMtOS42LTAuMy05LjZTMTY1LDYxLjUsMTU0LjUsNjIuMXoiLz4KCQkKCQkJPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xOV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNDEyLjMyNDciIHkxPSIzMTEzLjg2ODkiIHgyPSI0NjQuNDk5NSIgeTI9IjMxMTMuODY4OSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjk2MzYgLTEuNDEwMDAwZS0wMiAxLjMzMDAwMGUtMDIgMS4wMjIxIC0zODcuMjgyMiAtMzA5OC44NjMzKSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRiIvPgoJCTwvbGluZWFyR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MjUiIGQ9Ik04OS45LDY1LjZjNC41LDAsMTIuNSwxLjgsMTEuNyw3LjJjLTAuNyw1LjQtMi41LDE1LjctMTQuNywxNmwtMjMsMC45YzAsMC0xMC40LDEtMTEuNy03LjcKCQkJYy0xLjItNy44LTAuNy05LjYtMC43LTkuNnMtMC44LTQuNyw5LjctNS4zQzYxLjIsNjcuMSw3NCw2NS41LDg5LjksNjUuNnoiLz4KCQkKCQkJPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yMF8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNjQ0LjA0ODciIHkxPSIzMTUzLjgxMzUiIHgyPSI2NDkuMDQyMiIgeTI9IjMxNDAuNDYxMiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjk0MjggLTEuMDkwMDAwZS0wMiAxLjAzMDAwMGUtMDIgMC45OTk5IC00OTYuNTc0NCAtMzA2OS45NzA1KSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRiIvPgoJCTwvbGluZWFyR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MjYiIGQ9Ik0xNDcsNjAuNWgzLjlMMTQxLjgsODVoLTMuOUwxNDcsNjAuNXoiLz4KCQkKCQkJPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTkzLjQ0OCIgeTE9IjI2MDguMzIzIiB4Mj0iLTg4LjQ1NDgiIHkyPSIyNTk0Ljk3MTIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMS4yMDI0IC0xLjM5MDAwMGUtMDIgMS4zMTAwMDBlLTAyIDEuMjc1MyAyMjQuMzE2OCAtMzI0OS41MzM3KSI+CgkJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz4KCQkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRiIvPgoJCTwvbGluZWFyR3JhZGllbnQ+CgkJPHBhdGggY2xhc3M9InN0MjciIGQ9Ik0xNDkuNiw2MS43bDUtMC4xbC04LjQsMjIuNmwtNSwwLjFMMTQ5LjYsNjEuN3oiLz4KCQkKCQkJPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yMl8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNzczLjU0MjEiIHkxPSIzMTQ4LjE4NTgiIHgyPSI3NzguNTM1MyIgeTI9IjMxMzQuODM0IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDAuOTQyOCAtMS4wOTAwMDBlLTAyIDEuMDMwMDAwZS0wMiAwLjk5OTkgLTY4MS40MzY3IC0zMDU5LjI3OTEpIj4KCQkJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPgoJCQk8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+CgkJPC9saW5lYXJHcmFkaWVudD4KCQk8cGF0aCBjbGFzcz0ic3QyOCIgZD0iTTg0LjEsNjQuMkg4OGwtOSwyNC41aC0zLjlMODQuMSw2NC4yeiIvPgoJCQoJCQk8bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzIzXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI3Ljk1OSIgeTE9IjI2MDMuOTUzNiIgeDI9IjEyLjk1MjQiIHkyPSIyNTkwLjYwMjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMS4yMDI0IC0xLjM5MDAwMGUtMDIgMS4zMTAwMDBlLTAyIDEuMjc1MyAzOS41MzQxIC0zMjM4LjkyODIpIj4KCQkJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPgoJCQk8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+CgkJPC9saW5lYXJHcmFkaWVudD4KCQk8cGF0aCBjbGFzcz0ic3QyOSIgZD0iTTg2LjcsNjUuM2w1LTAuMWwtOC40LDIyLjZsLTUsMC4xTDg2LjcsNjUuM3oiLz4KCQk8cGF0aCBjbGFzcz0ic3QyMyIgZD0iTTQ3LjQsNjcuNmwtNy42LDQuMWMwLDAtMC43LDYtMC4zLDkuNGw3LjMtMi42QzQ2LjgsNzguNSw0OC43LDcyLjUsNDcuNCw2Ny42eiIvPgoJCTxwYXRoIGNsYXNzPSJzdDIzIiBkPSJNMTUxLjksNTkuOGMtMTMuNiwwLjEtMzEuNywxLjItMzYuOCw1LjhjLTQuNiw0LjItMy41LDQtNy4xLDQuMnMtMS45LDAuNS03LjMtMy40Yy04LjgtNi41LTUwLTAuNC01Mi44LDAuMwoJCQljLTIuNywwLjYtMy4xLDguMS0xLjYsMTEuNGMwLjUsMS4xLDEuOS0wLjQsMywxLjdjMSwxLjksMSwyLjUsMi4yLDUuOGMyLjgsNy41LDEyLDYuMywxMiw2LjNMOTEsOTAuNWM4LjgtMC42LDEwLjEtNy4yLDExLjktMTEuNgoJCQljMS4zLTMuMywyLjQtNC4yLDUuMy00LjNjMi45LTAuMSw0LjEsMCw2LjEsMy43YzIuMiw0LjIsNC4yLDEwLjYsMTMsMTAuMmwyNy40LTEuNmMwLDAsOS4zLDAuMywxMS4zLTcuNWMwLjktMy40LDAuOC00LjEsMS42LTYKCQkJYzAuOS0yLjMsMi41LTAuOSwyLjgtMi4xYzEuMS0zLjQtMC4xLTEwLjgtMi44LTExLjFDMTY2LjYsNjAuMSwxNjAuMSw1OS44LDE1MS45LDU5Ljh6IE0xNTIuMiw2Mi4xYzEuNSwwLDIuMywwLDIuMywwCgkJCWMxMC41LTAuNiwxMC4xLDQuMiwxMC4xLDQuMnMwLjcsMS43LDAuMyw5LjZjLTAuNCw4LjgtMTAuOSw4LjktMTAuOSw4LjlsLTIyLjksMS42Yy0xMi4yLDEtMTUtOS0xNi4zLTE0LjNzNi40LTcuOSwxMC45LTguNAoJCQlDMTM3LjYsNjIuMywxNDcuOSw2Mi4xLDE1Mi4yLDYyLjF6IE04OS45LDY1LjZjNC41LDAsMTIuNSwxLjgsMTEuNyw3LjJjLTAuNyw1LjQtMi41LDE1LjctMTQuNywxNmwtMjMsMC45YzAsMC0xMC40LDEtMTEuNy03LjcKCQkJYy0xLjItNy44LTAuNy05LjYtMC43LTkuNnMtMC44LTQuNyw5LjctNS4zQzYxLjIsNjcuMSw3NCw2NS41LDg5LjksNjUuNnoiLz4KCTwvZz4KPC9nPgo8L3N2Zz4K" />

            <button id="modalBtn"> Help ? </button>
          </div>
        </section>

        <div class="container">
            <?php
              function renderURL() {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $url = htmlspecialchars($_REQUEST['url']);
                  if (empty($url)) { echo ""; } else { echo $url; }
                }
              }
            ?>

            <div class="first-row">
                <div class="small-mobile">
                    <iframe src="//<?php renderURL(); ?>" id="frameview"></iframe>
                    <p>320 x 568</p>
                </div>

                <div class="mobile">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>375 x 667</p>
                </div>

                <div class="tablet-landscape">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>1024 x 768</p>
                </div>

                <div class="laptop">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>1366 x 768</p>
                </div>
            </div>

            <div class="second-row">
                <div class="large-mobile">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>480 x 768</p>
                </div>

                <div class="tablet-portrait">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>768 x 1024</p>
                </div>

                <div class="desktop">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>1920 x 1024</p>
                </div>
            </div>
        </div>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById("infoModal");

        // Get the button that opens the modal
        var btn = document.getElementById("modalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {modal.style.display = "block";}

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {modal.style.display = "none";}

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {if (event.target == modal) {modal.style.display = "none";} }
      </script>
    </body>
</html>
