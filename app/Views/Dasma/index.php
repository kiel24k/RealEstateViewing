<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Index</title>
    <style>
        /*

Simple House

https://templatemo.com/tm-539-simple-house

*/

        ul,
        nav,
        body,
        h1,
        h2,
        h4,
        h6,
        p,
        figure {
            margin: 0;
            padding: 0;
        }

        a,
        button {
            transition: all 0.3s ease;
        }

        /* Bootstrap grid system  */

        html {
            box-sizing: border-box;
            -ms-overflow-style: scrollbar;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin-right: auto;
            margin-left: auto;
        }

        .tm-container-inner,
        .tm-container-inner-2 {
            padding-left: 15px;
            padding-right: 15px;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-lg-3,
        .col-lg-4,
        .col-lg-6,
        .col-md-4,
        .col-md-6,
        .col-sm-6,
        .col-12 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width: 576px) {
            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 768px) {
            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 992px) {
            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /*
  primary: #2D99CC
  success: #319966
  danger: #993332
*/

        .tm-btn {
            display: inline-block;
            font-size: 1rem;
            width: auto;
            padding: 10px 30px;
            text-decoration: none;
            cursor: pointer;
            border: 0;
        }

        .tm-btn-default {
            border: 1px solid #ccc;
            background-color: transparent;
            color: #626364;
        }

        .tm-btn-default:hover,
        .tm-btn-default:focus {
            color: white;
            background-color: #98999A;
        }

        .tm-btn-primary {
            background-color: #2D99CC;
            color: white;
        }

        .tm-btn-primary:hover,
        .tm-btn-primary:focus {
            background-color: #1b6f96;
        }

        .tm-btn-success {
            background-color: #319966;
            color: white;
        }

        .tm-btn-success:hover,
        .tm-btn-success:focus {
            background-color: #1d6e46;
        }

        .tm-btn-danger {
            background-color: #993332;
            color: white;
        }

        .tm-btn-danger:hover,
        .tm-btn-danger:focus {
            background-color: #752423;
        }

        .tm-mb-45 {
            margin-bottom: 45px;
        }

        .tm-mb-p {
            margin-bottom: 20px;
        }

        .tm-text-success {
            color: #319966;
        }

        .text-center {
            text-align: center;
        }

        .hidden {
            display: none !important;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        body {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 17px;
            background-color: #ccc;
            overflow-x: hidden;
        }

        .container {
            background-color: white;
        }

        p,
        address {
            color: #626364;
            line-height: 1.8;
        }

        /* Set width and height in JS */
        .placeholder {
            width: 100%;
            min-height: 460px;
            background-color: #556E5B;
        }

        .placeholder-2 {
            width: 100%;
            min-height: 220px;
            background-color: #CFBEA5;
            position: relative;
            z-index: 998;
        }

        .parallax-window {
            min-height: 460px;
            background: transparent;
            position: relative;
        }

        .parallax-window-2 {
            min-height: 220px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            background: transparent;
            position: relative;
        }

        .parallax-mirror {
            z-index: 999 !important;
        }

        .tm-header {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            color: white;
            z-index: 1000;
        }

        .tm-header-inner {
            padding: 40px 50px;
        }

        @media (max-width: 991px) {
            .tm-header-inner {
                padding: 30px 15px;
            }
        }

        .tm-site-logo {
            display: inline-block;
            margin-right: 5px;
        }

        .tm-site-text-box {
            display: inline-block;
        }

        .tm-site-title {
            font-size: 2.2rem;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .tm-site-description {
            font-size: 1.1rem;
            font-weight: 400;
        }

        .tm-nav {
            text-align: right;
            margin-top: 30px;
        }

        .tm-nav-ul {
            display: flex;
            justify-content: flex-end;
        }

        .tm-nav-li {
            list-style: none;
            display: block;
            margin-bottom: 0;
            padding-right: 25px;
            padding-left: 25px;
        }

        @media (max-width: 991px) {
            .tm-nav-li {
                padding-right: 15px;
                padding-left: 15px;
            }
        }

        .tm-nav-link {
            color: white;
            text-decoration: none;
            padding-bottom: 10px;
        }

        .tm-nav-link.active,
        .tm-nav-link:hover {
            border-bottom: 1px solid white;
        }

        .tm-welcome-section {
            margin: 60px auto;
            max-width: 655px;
        }

        .tm-section-title {
            font-size: 2rem;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .tm-gallery {
            margin-bottom: 80px;
        }

        .tm-gallery-page {
            max-width: 280px;
            margin-left: auto;
            margin-right: auto;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .tm-gallery-description {
            font-size: 0.95rem;
        }

        .tm-section,
        .tm-container-inner,
        .tm-container-inner-2 {
            margin-left: auto;
            margin-right: auto;
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .tm-gallery-page {
                max-width: 560px;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {

            .tm-gallery-page,
            .tm-section,
            .tm-container-inner,
            .tm-container-inner-2 {
                max-width: 840px;
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {

            .tm-gallery-page,
            .tm-section {
                max-width: 1120px;
            }

            .tm-container-inner {
                max-width: 1120px;
            }

            .tm-container-inner-2 {
                max-width: 900px;
            }
        }

        .tm-gallery-item {
            max-width: 280px;
        }

        .tm-gallery-img {
            margin-bottom: 20px;
        }

        .tm-gallery-title {
            font-size: 1.3rem;
            font-weight: 400;
            color: #1A6692;
            margin-bottom: 15px;
        }

        .tm-gallery-description {
            margin-bottom: 20px;
        }

        .tm-gallery-price {
            font-size: 1.25rem;
            color: #2F956D;
            margin-bottom: 60px;
        }

        .tm-paging-links {
            text-align: center;
            margin-bottom: 40px;
        }

        .tm-paging-item {
            list-style: none;
            display: inline-block;
            border: 1px solid #2F956D;
            margin: 7px;
        }

        .tm-paging-link {
            padding: 10px 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #2F956D;
            background-color: transparent;
        }

        .tm-paging-link.active,
        .tm-paging-link:hover {
            background-color: #2F956D;
            color: white;
        }

        .tm-description-figure {
            text-align: center;
        }

        .tm-description-box {
            margin-left: auto;
            margin-right: auto;
        }

        .tm-description-box {
            padding-left: 0;
            padding-right: 0;
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            max-width: 530px;
        }

        @media (min-width: 768px) {
            .tm-description-box {
                padding-left: 5px;
                padding-right: 40px;
                margin-top: 0;
            }
        }

        .tm-right {
            align-self: flex-end;
        }

        .tm-footer {
            padding: 25px 15px;
            margin-top: 40px;
        }

        .tm-footer a {
            color: #626364;
            text-decoration: none;
        }

        .tm-footer a:hover {
            color: #1A6692;
        }

        /* About */
        .tm-persons {
            margin-bottom: 20px;
        }

        .tm-person {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 60px;
        }

        @media (min-width: 420px) {
            .tm-person {
                flex-direction: row;
            }
        }

        .tm-person-description {
            padding-left: 20px;
            padding-right: 20px;
        }

        .tm-person-name {
            font-size: 1.6rem;
            font-weight: 300;
            color: #09C;
            margin-bottom: 5px;
            margin-top: 15px;
        }

        @media (min-width: 420px) {
            .tm-person-name {
                margin-top: 0;
            }
        }

        .tm-person-title {
            color: #C39;
            margin-bottom: 20px;
        }

        .tm-person-about {
            margin-bottom: 20px;
        }

        .tm-social-link {
            color: #626364;
            display: inline-block;
            border-radius: 1px;
            background-color: transparent;
            font-size: 1.3rem;
            text-decoration: none;
            width: 40px;
            height: 40px;
            margin-right: 0;
            margin-bottom: 15px;
        }

        .tm-social-link:hover {
            color: white;
            background-color: #626364;
        }

        .tm-social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .tm-feature {
            text-align: center;
            padding: 45px 20px;
        }

        .tm-feature-icon {
            color: #9f9c9c;
            margin-bottom: 65px;
        }

        .tm-feature-description {
            margin-bottom: 35px;
            font-size: 1rem;
        }

        .tm-features {
            margin-top: 35px;
        }

        .tm-history {
            margin-top: 45px;
        }

        .tm-history-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .tm-history-img {
            max-width: 100%;
        }

        @media (min-width: 768px) {
            .tm-history-img {
                max-width: 50%;
            }

            .tm-history-inner {
                flex-direction: row;
            }
        }

        .tm-history-title {
            font-size: 1.6rem;
            font-weight: 300;
            color: #1A6692;
            margin-bottom: 30px;
        }

        .tm-history-text {
            max-width: 480px;
            margin: 15px auto 0;
        }

        .tm-history-description {
            margin-bottom: 40px;
        }

        @media (min-width: 768px) {
            .tm-history-text {
                max-width: auto;
                margin: 0 auto 0 35px;
            }
        }

        /* Contact Page */
        .tm-contact-form {
            max-width: 100%;
        }

        @media (min-width: 768px) {
            .tm-contact-form {
                max-width: 310px;
            }
        }

        .tm-d-flex {
            display: flex;
            flex-direction: column;
        }

        .tm-btn-right {
            align-self: flex-end;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1.1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #626364;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-right: 0;
            border-top: 0;
            border-left: 0;
            border-radius: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .tm-info-title {
            font-size: 1.6rem;
            font-weight: 300;
            margin-bottom: 30px;
        }

        address {
            font-style: normal;
            margin-bottom: 50px;
        }

        .tm-address-box {
            max-width: 100%;
        }

        @media (min-width: 768px) {
            .tm-address-box {
                max-width: 315px;
            }
        }

        .tm-contact-icon {
            display: inline-block;
            margin-right: 25px;
            color: #319966;
        }

        .tm-contact-link {
            display: inline-block;
            color: #626364;
            margin-bottom: 25px;
            text-decoration: none;
        }

        .tm-contact-social {
            margin-top: 10px;
        }

        .tm-map {
            max-width: 900px;
            height: 450px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .tm-map iframe {
            width: 100%;
            height: 100%;
        }

        .tm-contact-section {
            padding-bottom: 30px;
        }

        .tm-map-section {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .tm-info-section {
            padding-top: 30px;
        }

        .tm-faq {
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
        }

        .tm-accordion {
            padding-top: 40px;
        }

        /* https://www.w3schools.com/howto/howto_js_accordion.asp */
        /* Style the buttons that are used to open and close the accordion panel */
        .accordion {
            font-size: 1.2rem;
            font-family: 'Open Sans', Helevetica, Arial, sans-serif;
            color: #999;
            background-color: transparent;
            border: 1px solid #d0d0d0;
            margin-bottom: 17px;
            margin-top: 17px;
            cursor: pointer;
            padding: 10px 20px 6px;
            width: 100%;
            text-align: left;
            outline: none;
            transition: 0.4s;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .accordion.active,
        .accordion:hover {
            color: #09C;
        }

        @keyframes changeIcon {
            0% {
                content: '\f0d9';
            }

            50% {
                color: white;
            }

            100% {
                content: "\f0d7";
            }
        }

        @keyframes changeIconBack {
            0% {
                content: '\f0d7';
            }

            50% {
                color: white;
            }

            100% {
                content: "\f0d9";
            }
        }

        .accordion:after {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            animation: changeIconBack 0.3s linear;
            content: '\f0d9';
            font-size: 2rem;
            color: #999;
            float: right;
            margin-left: 5px;
        }

        .accordion.active:after {
            animation: changeIcon 0.3s linear;
            content: '\f0d7';
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .panel p {
            padding: 5px 20px 30px;
        }
    </style>
</head>

<body>


    <?php
    if (session()->getFlashdata('status')) {
        echo '<div class="alert alert-success text-center">' . session()->getFlashdata('status') . "</div>";
    }
    ?>

    <a href="<?= base_url('/add_data_view') ?>" class="btn btn-success">Add Data</a>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($realestate as $row) : ?>
                <tr>
                    <td><img width="50px" src="/uploads/<?= $row['image'] ?>" alt=""></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['description'] ?>
                    <td>
                        <a href="<?= base_url('update_view/' . $row['id']) ?>" class="btn btn-info btn-sm">Update</a>
                        <a href="<?= base_url('delete/' . $row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <main>


        <div class="row tm-gallery">
            <div id="tm-gallery-page-pizza" class="tm-gallery-page">
                <?php foreach ($realestate as $row) : ?>
                    <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" style="box-shadow:0px 0px 15px 0px gray;margin:20px; height:25rem; border-radius:15px;padding:10px;">
                        <figure>
                            <img src="/uploads/<?= $row['image'] ?>" alt="Image" class="" height="250px" width="250px" style="margin:auto;"/>
                            <figcaption>
                                <h4 class="tm-gallery-title"><?= $row['name'] ?></h4>
                                <p class="tm-gallery-description"><?= $row['description'] ?></p>
                                <span>
                                    <a href="<?= base_url('update_view/' . $row['id']) ?>" class="btn btn-info btn-sm">Update</a>
                                    <a href="<?= base_url('delete/' . $row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                </span>
                            </figcaption>
                        </figure>
                    </article>
                <?php endforeach ?>
            </div>
        </div>

    </main>
</body>

</html>