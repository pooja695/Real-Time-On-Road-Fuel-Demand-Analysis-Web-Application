<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <style>
        * {
          box-sizing: content-box;
        }

        body {
          margin: 0;
          height: 200%;
          width: 100%;
          overflow: hidden;
          font-family: 'Montserrat', sans-serif;
          font-weight: 900;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .form-wrapper {
          width: 320px;
          height: 550px;
          padding: 10px 17px 17px 17px;
          border-radius: 40px;
          background: white;
          box-shadow: 7px 7px 7px #cbced1,
            -5px -5px 5px #ffffff;
        }

        .user-photo {
          width: 81px;
          height: 81px;
          border-radius: 75%;
          background-image : url("small1.png");
          margin: 0 auto;
          box-shadow:
            0px 0px 2px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaaf,
            -8px -8px 15px #ffffff;
        }

        .user-photo i {
          width: 81px;
          height: 81px;
          font-size: 60px;
          display: flex;
          justify-content: center;
          align-items: center;
          line-height: 1.3;
          color: #ffffff;
        }

        .heading {
          text-align: center;
          font-size: 21px;
          padding-top: 23px;
          letter-spacing: 0.6px;
        }

        .sm-text {
          text-align: center;
          font-size: 10px;
          padding-top: 6px;
          letter-spacing: 3.1px;
        }

        .input-text {
          width: 99%;
          padding: 30px 5.1px 5.1px 5.1px;
        }

        .input-text input {
          border: none;
          outline: none;
          background: none;
          font-size: 12px;
          color: #555;
          padding: 15px 5px 10px 2px;
        }

        .username,
        .password {
          margin-bottom: 25px;
          border-radius: 25px;
          box-shadow: inset 8px 8px 8px #cbced1,
            inset -8px -8px 8px #ffffff;
        }

        .input-text svg {
          height: 25px;
          margin: 0 10px -3px 25px;
        }

        .sign-btn {
          outline: none;
          border: none;
          cursor: pointer;
          width: 99.9%;
          height: 40px;
          border-radius: 29.9px;
          font-size: 15px;
          font-weight: 699.9;
          font-family: monospace;
          color: #fff;
          text-align: center;
          background: brown;
          box-shadow: 3px 3px 8px #b1b1b1,
            -3px -3px 8px #ffffff;
          transition: 0.5s;
        }

        .sign-btn:hover {
          background: #641E16;
        }

        .sign-btn:active {
          background:  #641E16;
        }

        .link {
          padding-top: 30px;
          text-align: center;
        }

        .link a {
          color: blue;
          font-size: 15px;
          font-weight: 500;
        }
    </style>
</head>
<body background="bg10.jpg" style="background-repeat:no-repeat;background-size:100% 120%">
<center>
    <h1> <font color= "white"> <i> ON ROAD FUEL DEMAND APPLICATION </i></font color></h1><br/>
    <div class="form-wrapper">
        <div class="heading">Login Form</div>
        <div class="input-text">
            <div class="username">
                <span>&#128222;</span>
                <input type="tel" class="user-input" placeholder="mobile number" name="mobile_no" maxlength="13" pattern="[+]{1}[0-9]{2}[0-9]{10}" required/>
                <h6> Format: +919812345678</h6>
            </div>
            <div class="password">
                <svg fill="#999" viewBox="0 0 1024 1024">
                    <path class="path1" d="M742.4 409.6h-25.6v-76.8c0-127.043-103.357-230.4-230.4-230.4s-230.4 103.357-230.4 230.4 230.4 230.4 230.4 230.4v76.8h-25.6c-42.347 0-76.8 34.453-76.8 76.8v409.6c0 42.347 34.453 76.8 76.8 76.8h512c42.347 0 76.8-34.453 76.8-76.8v-409.6c0-42.347-34.453-76.8-76.8-76.8zM307.2 332.8c0-98.811 80.389-179.2 179.2-179.2s179.2 80.389 179.2 179.2v76.8h-358.4v-76.8zM768 896c0 14.115-11.485 25.6-25.6 25.6h-512c-14.115 0-25.6-11.485-25.6-25.6v-409.6c0-14.115 11.485-25.6 25.6-25.6h512c14.115 0 25.6 11.485 25.6 25.6v409.6z"></path>
                </svg>
                <i class="bi bi-lock"></i><input type="password" class="pass-input" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required maxlength="6" />
            </div>
        </div>
        <button class="sign-btn">Login
