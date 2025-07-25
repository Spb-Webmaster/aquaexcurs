<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Open+sans:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f6f6f2;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        .primary{
            background: #17bebb;
        }
        .bg_white{
            background: #ffffff;
        }
        .bg_light{
            background: #f7fafa;
        }
        .bg_black{
            background: #000000;
        }
        .bg_dark{
            background: rgba(0,0,0,.8);
        }
        .email-section{
            padding:2.5em,2.5em,2.5em,2.5em;
        }

        /*BUTTON*/
        .btn{
            padding: 10px 15px;
            display: inline-block;
        }
        .btn.btn-primary{
            border-radius: 5px;
            background: #29ABE2;
            color: #ffffff;
        }
        .btn.btn-white{
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }
        .btn.btn-white-outline{
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }
        .btn.btn-black-outline{
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }
        .btn-custom{
            color: rgba(0,0,0,.3);
            text-decoration: underline;
        }

        h1,h2,h3,h4,h5,h6{
            font-family: 'Open Sans', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0,0,0,.4);
        }

        a{
            color: #29ABE2;
        }

        table{
        }
        /*LOGO*/

        .logo h1{
            margin: 0;
        }
        .logo h1 a{
            color: #29ABE2;
            font-size: 24px;
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;
        }

        /*HERO*/
        .hero{
            position: relative;
            z-index: 0;
        }

        .hero .text{
            color: rgba(0,0,0,.3);
        }
        .hero .text h2{
            color: #000;
            font-size: 34px;
            margin-bottom: 15px;
            font-weight: 300;
            line-height: 1.2;
        }
        .hero .text h3{
            font-size: 24px;
            font-weight: 200;
        }
        .hero .text h2 span{
            font-weight: 600;
            color: #000;
        }


        /*PRODUCT*/
        .product-entry{
            display: block;
            position: relative;
            float: left;
            padding-top: 20px;
        }
        .product-entry .text{
            width: calc(100% - 125px);
            padding-left: 20px;
        }
        .product-entry .text h3{
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .product-entry .text p{
            margin-top: 0;
        }
        .product-entry img, .product-entry .text{
            float: left;
        }

        ul.social{
            padding: 0;
        }
        ul.social li{
            display: inline-block;
            margin-right: 10px;
        }

        /*FOOTER*/

        .footer{
            border-top: 1px solid rgba(0,0,0,.05);
            color: rgba(0,0,0,.5);
        }
        .footer .heading{
            color: #000;
            font-size: 20px;
        }
        .footer ul{
            margin: 0;
            padding: 0;
        }
        .footer ul li{
            list-style: none;
            margin-bottom: 10px;
        }
        .footer ul li a{
            color: rgba(0,0,0,1);
        }


        @media screen and (max-width: 500px) {

        }

    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto; background: white" class="email-container">
        <!-- BEGIN BODY -->

        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="logo" style="text-align: left;">
                                <h1 style="padding-top: 10px">

                                    <img width="163" height="40" style="background: #ffffff;border-radius: 1px;padding: 5px 20px 5px 0px;" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYzIiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTYzIDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNODEuNzggMC4wMTcwNTkzSDgyLjcxMjFIODMuNjQ0MlYxMC4xMDc1SDgyLjcxMjFIODEuNzhWMC4wMTcwNTkzWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTg1LjM1NTIgMi41NDA5Mkg4Ni4yMDA4SDg3LjA0NjRWMy4xOTM3NUM4Ny42MzMxIDIuNTg5OTkgODguMzM0MSAyLjI4Nzk1IDg5LjE1MTIgMi4yODc5NUM5MC4wNDc4IDIuMjg3OTUgOTAuNzU4OCAyLjU5MDk5IDkxLjI4NTEgMy4xOTcwNkM5MS44MTA4IDMuODAzMTQgOTIuMDczNyA0LjYyMTQxIDkyLjA3MzcgNS42NTEyMVYxMC4xMDY5SDkxLjE2ODhIOTAuMjU2NlY2LjA1NzM2QzkwLjI1NjYgNS4zNjQ3NSA5MC4xMjc3IDQuODM4NTcgODkuODcwMSA0LjQ3ODg0Qzg5LjYxMzIgNC4xMTk0NCA4OS4yMzc3IDMuOTM5NDEgODguNzQ0OCAzLjkzOTQxQzg4LjIyMTEgMy45Mzk0MSA4Ny44MjggNC4xMjE0MyA4Ny41NjY0IDQuNDg1NDdDODcuMzA0MiA0Ljg0OTUxIDg3LjE3MzMgNS4zOTU1OCA4Ny4xNzMzIDYuMTIzNjdWMTAuMTA2Nkg4Ni4yNjc4SDg1LjM1NTZWMi41NDA5Mkg4NS4zNTUyWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTkzLjk1NzggMTAuMTA3NlY0LjEzOTYzSDkzLjA4NTdWMi41NDEyMkg5My45NTc4VjAuMDAzNTI0NzhIOTUuNzc1NVYyLjU0MTIySDk2Ljg3NFY0LjEzOTYzSDk1Ljc3NTVWMTAuMTA3Nkg5My45NTc4WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEwMS4yNTUgMTAuMzYwOEMxMDAuMTY0IDEwLjM2MDggOTkuMjMxOCA5Ljk2ODkgOTguNDYyMSA5LjE4NTQ1Qzk3LjY5MTggOC40MDE2NiA5Ny4zMDY2IDcuNDUwNDQgOTcuMzA2NiA2LjMzMTQ2Qzk3LjMwNjYgNS4yMTI0NyA5Ny42OTE4IDQuMjU4OTMgOTguNDYyMSAzLjQ3MDgzQzk5LjIzMTggMi42ODI3MyAxMDAuMTY0IDIuMjg4ODUgMTAxLjI1NSAyLjI4ODg1QzEwMi4zNTIgMi4yODg4NSAxMDMuMjg1IDIuNjgyNzMgMTA0LjA1NSAzLjQ3MDgzQzEwNC44MjUgNC4yNTg5MyAxMDUuMjEgNS4yMTI0NyAxMDUuMjEgNi4zMzE0NkMxMDUuMjEgNi42MDIzMyAxMDUuMTg5IDYuODY4OSAxMDUuMTQ0IDcuMTMwODNIOTkuMjQ0MUM5OS4zNDY1IDcuNDU5MzkgOTkuNTE3MiA3Ljc1Njc5IDk5Ljc1NjggOC4wMjMzNkMxMDAuMTcgOC40NzYyNiAxMDAuNjg1IDguNzAyNzEgMTAxLjMwMSA4LjcwMjcxQzEwMS42ODMgOC43MDI3MSAxMDIuMDMzIDguNjEzODYgMTAyLjM1IDguNDM2MTRDMTAyLjY2OCA4LjI1ODc2IDEwMi45MDIgOC4wMjEwNCAxMDMuMDUzIDcuNzIzNjRIMTA0Ljk3MUMxMDQuNzI3IDguNTI3MzIgMTA0LjI2NyA5LjE2Nzg4IDEwMy41OTMgOS42NDUzMUMxMDIuOTE4IDEwLjEyMjEgMTAyLjEzOSAxMC4zNjA4IDEwMS4yNTUgMTAuMzYwOFpNMTAzLjMxMyA1LjY3ODYzQzEwMy4yMjQgNS4yNzg3OCAxMDMuMDQ0IDQuOTMwNjUgMTAyLjc3NCA0LjYzMjkyQzEwMi4zNjUgNC4xNzU3MSAxMDEuODU5IDMuOTQ2OTQgMTAxLjI1NSAzLjk0Njk0QzEwMC42NTIgMy45NDY5NCAxMDAuMTQ1IDQuMTc1NzEgOTkuNzM2OSA0LjYzMjkyQzk5LjQ3NTQgNC45MzQ5NiA5OS4yOTM0IDUuMjgzNDIgOTkuMTkxNCA1LjY3ODYzSDEwMy4zMTNaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTA2LjQ3NiAyLjU0MTQ5SDEwNy4zMjFIMTA4LjE2OFYzLjExNDQxTDEwOC4yNTQgMi45OTQ3MkMxMDguNTkxIDIuNTI0MjUgMTA5LjExMyAyLjI4ODg1IDEwOS44MTkgMi4yODg4NUgxMDkuOTM4VjQuMDIwNTRDMTA5LjQyOCA0LjA1NjAyIDEwOS4wMzcgNC4xODkzIDEwOC43NjcgNC40MjAwNkMxMDguNDUxIDQuNjk1NTggMTA4LjI5NCA1LjEzMDU4IDEwOC4yOTQgNS43MjU3MVYxMC4xMDgySDEwNy4zODhIMTA2LjQ3NkwxMDYuNDc2IDIuNTQxNDlaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTEwLjcxNyAyLjU0MDkySDExMS41NjNIMTEyLjQwOFYzLjE5Mzc1QzExMi45OTUgMi41ODk5OSAxMTMuNjk2IDIuMjg3OTUgMTE0LjUxMyAyLjI4Nzk1QzExNS40MSAyLjI4Nzk1IDExNi4xMjEgMi41OTA5OSAxMTYuNjQ3IDMuMTk3MDZDMTE3LjE3NCAzLjgwMzE0IDExNy40MzYgNC42MjE0MSAxMTcuNDM2IDUuNjUxMjFWMTAuMTA2OUgxMTYuNTMxSDExNS42MTlWNi4wNTczNkMxMTUuNjE5IDUuMzY0NzUgMTE1LjQ5IDQuODM4NTcgMTE1LjIzMiA0LjQ3ODg0QzExNC45NzUgNC4xMTk0NCAxMTQuNiAzLjkzOTQxIDExNC4xMDcgMy45Mzk0MUMxMTMuNTgzIDMuOTM5NDEgMTEzLjE5IDQuMTIxNDMgMTEyLjkyOCA0LjQ4NTQ3QzExMi42NjYgNC44NDk1MSAxMTIuNTM1IDUuMzk1NTggMTEyLjUzNSA2LjEyMzY3VjEwLjEwNjZIMTExLjYzSDExMC43MThWMi41NDA5MkgxMTAuNzE3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEyMi4yODMgMTAuMzYwOEMxMjEuMjQ1IDEwLjM2MDggMTIwLjM1OSA5Ljk2ODkgMTE5LjYyNyA5LjE4NTQ1QzExOC44OTQgOC40MDE2NiAxMTguNTI4IDcuNDUwNDQgMTE4LjUyOCA2LjMzMTQ2QzExOC41MjggNS4yMTI0NyAxMTguODk0IDQuMjU4OTMgMTE5LjYyNyAzLjQ3MDgzQzEyMC4zNTkgMi42ODI3MyAxMjEuMjQ3IDIuMjg4ODUgMTIyLjI5IDIuMjg4ODVDMTIzLjI5NyAyLjI4ODg1IDEyNC4xNTIgMi42NTA5IDEyNC44NTMgMy4zNzQzNVYyLjU0MTgySDEyNi41MjVWMTAuMTA4MkgxMjUuNjkySDEyNC44NTNWOS4yODIyNkMxMjQuMTQzIDkuOTk2NzYgMTIzLjI4NiAxMC4zNTY1IDEyMi4yODMgMTAuMzYwOFpNMTIyLjU4MyAzLjkzMzY4QzEyMS45NDggMy45MzM2OCAxMjEuNDE3IDQuMTYzNDQgMTIwLjk5MSA0LjYyMjk3QzEyMC41NjUgNS4wODI1IDEyMC4zNTIgNS42NTIxMSAxMjAuMzUyIDYuMzMxNDZDMTIwLjM1MiA3LjAwNjQ5IDEyMC41NjUgNy41NzI0NSAxMjAuOTkxIDguMDI5OTlDMTIxLjQxNyA4LjQ4NzUzIDEyMS45NDYgOC43MTU5NyAxMjIuNTc2IDguNzE1OTdDMTIzLjIxMSA4LjcxNTk3IDEyMy43NDIgOC40ODc1MyAxMjQuMTcxIDguMDI5OTlDMTI0LjU5OSA3LjU3Mjc4IDEyNC44MTMgNy4wMDQxNyAxMjQuODEzIDYuMzI0ODNDMTI0LjgxMyA1LjY0NTQ4IDEyNC42IDUuMDc3MiAxMjQuMTc0IDQuNjE5NjZDMTIzLjc0OCA0LjE2MjQ1IDEyMy4yMTcgMy45MzM2OCAxMjIuNTgzIDMuOTMzNjhaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTI4LjMyMyAxMC4xMDc2VjQuMTM5NjNIMTI3LjQ1MVYyLjU0MTIySDEyOC4zMjNWMC4wMDM1MjQ3OEgxMzAuMTQxVjIuNTQxMjJIMTMxLjIzOVY0LjEzOTYzSDEzMC4xNDFWMTAuMTA3NkgxMjguMzIzWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEzMS45NzggMC4wMTcwNTkzSDEzMy43OTZWMS42ODIxMUgxMzEuOTc4VjAuMDE3MDU5M1pNMTMxLjk3OCAyLjU0MTE2SDEzMi44ODNIMTMzLjc5NlYxMC4xMDc1SDEzMi44OUgxMzEuOTc4VjIuNTQxMTZaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTM2LjA0MyA5LjE4NTQ1QzEzNS4yNTkgOC40MDE2NiAxMzQuODY4IDcuNDUwNDQgMTM0Ljg2OCA2LjMzMTQ2QzEzNC44NjggNS4yMTI0NyAxMzUuMjU5IDQuMjU4OTMgMTM2LjA0MyAzLjQ3MDgzQzEzNi44MjcgMi42ODI3MyAxMzcuNzc1IDIuMjg4ODUgMTM4Ljg5IDIuMjg4ODVDMTQwLjAwOSAyLjI4ODg1IDE0MC45NiAyLjY4MjczIDE0MS43NDMgMy40NzA4M0MxNDIuNTI2IDQuMjU4OTMgMTQyLjkxOCA1LjIxMjQ3IDE0Mi45MTggNi4zMzE0NkMxNDIuOTE4IDcuNDUwNDQgMTQyLjUyNiA4LjQwMTY2IDE0MS43NDMgOS4xODU0NUMxNDAuOTYgOS45NjkyNCAxNDAuMDA5IDEwLjM2MDggMTM4Ljg5IDEwLjM2MDhDMTM3Ljc3NSAxMC4zNjA4IDEzNi44MjcgOS45NjkyNCAxMzYuMDQzIDkuMTg1NDVaTTE0MC40NjEgOC4wMjMwM0MxNDAuODgzIDcuNTcwMTMgMTQxLjA5NCA3LjAwNjE2IDE0MS4wOTQgNi4zMzExMkMxNDEuMDk0IDUuNjU2MDkgMTQwLjg4MyA1LjA5MDEzIDE0MC40NjEgNC42MzI1OUMxNDAuMDQgNC4xNzUwNSAxMzkuNTE2IDMuOTQ2NjEgMTM4Ljg5IDMuOTQ2NjFDMTM4LjI2OSAzLjk0NjYxIDEzNy43NDcgNC4xNzUzOCAxMzcuMzI1IDQuNjMyNTlDMTM2LjkwNCA1LjA4OTggMTM2LjY5MyA1LjY1NjA5IDEzNi42OTMgNi4zMzExMkMxMzYuNjkzIDcuMDA2MTYgMTM2LjkwNCA3LjU2OTggMTM3LjMyNSA4LjAyMzAzQzEzNy43NDcgOC40NzU5MyAxMzguMjY5IDguNzAyMzggMTM4Ljg5IDguNzAyMzhDMTM5LjUxNiA4LjcwMjM4IDE0MC4wNCA4LjQ3NTkzIDE0MC40NjEgOC4wMjMwM1oiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNDMuOTk3IDIuNTQwOTJIMTQ0Ljg0M0gxNDUuNjg5VjMuMTkzNzVDMTQ2LjI3NSAyLjU4OTk5IDE0Ni45NzYgMi4yODc5NSAxNDcuNzkzIDIuMjg3OTVDMTQ4LjY5IDIuMjg3OTUgMTQ5LjQwMSAyLjU5MDk5IDE0OS45MjcgMy4xOTcwNkMxNTAuNDUzIDMuODAzMTQgMTUwLjcxNiA0LjYyMTQxIDE1MC43MTYgNS42NTEyMVYxMC4xMDY5SDE0OS44MTFIMTQ4Ljg5OFY2LjA1NzM2QzE0OC44OTggNS4zNjQ3NSAxNDguNzcgNC44Mzg1NyAxNDguNTEyIDQuNDc4ODRDMTQ4LjI1NSA0LjExOTQ0IDE0Ny44OCAzLjkzOTQxIDE0Ny4zODcgMy45Mzk0MUMxNDYuODYzIDMuOTM5NDEgMTQ2LjQ3IDQuMTIxNDMgMTQ2LjIwOCA0LjQ4NTQ3QzE0NS45NDYgNC44NDk1MSAxNDUuODE1IDUuMzk1NTggMTQ1LjgxNSA2LjEyMzY3VjEwLjEwNjZIMTQ0LjkxSDE0My45OTdWMi41NDA5MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNTUuNTYyIDEwLjM2MDhDMTU0LjUyNCAxMC4zNjA4IDE1My42MzggOS45Njg5IDE1Mi45MDYgOS4xODU0NUMxNTIuMTc0IDguNDAxOTkgMTUxLjgwOCA3LjQ1MDQ0IDE1MS44MDggNi4zMzE0NkMxNTEuODA4IDUuMjEyNDcgMTUyLjE3NCA0LjI1ODkzIDE1Mi45MDYgMy40NzA4M0MxNTMuNjM4IDIuNjgyNzMgMTU0LjUyNyAyLjI4ODg1IDE1NS41NjkgMi4yODg4NUMxNTYuNTc3IDIuMjg4ODUgMTU3LjQzMSAyLjY1MDkgMTU4LjEzMyAzLjM3NDM1VjIuNTQxODJIMTU5LjgwNFYxMC4xMDgySDE1OC45NzJIMTU4LjEzM1Y5LjI4MjI2QzE1Ny40MjMgOS45OTY3NiAxNTYuNTY2IDEwLjM1NjUgMTU1LjU2MiAxMC4zNjA4Wk0xNTUuODYyIDMuOTMzNjhDMTU1LjIyOCAzLjkzMzY4IDE1NC42OTggNC4xNjM0NCAxNTQuMjcyIDQuNjIyOTdDMTUzLjg0NSA1LjA4MjUgMTUzLjYzMiA1LjY1MjExIDE1My42MzIgNi4zMzE0NkMxNTMuNjMyIDcuMDA2NDkgMTUzLjg0NSA3LjU3MjQ1IDE1NC4yNzIgOC4wMjk5OUMxNTQuNjk4IDguNDg3MiAxNTUuMjI2IDguNzE1OTcgMTU1Ljg1NiA4LjcxNTk3QzE1Ni40OSA4LjcxNTk3IDE1Ny4wMjMgOC40ODc1MyAxNTcuNDUgOC4wMjk5OUMxNTcuODc5IDcuNTcyNzggMTU4LjA5MyA3LjAwNDE3IDE1OC4wOTMgNi4zMjQ4M0MxNTguMDkzIDUuNjQ1NDggMTU3Ljg4IDUuMDc3MiAxNTcuNDUzIDQuNjE5NjZDMTU3LjAyOCA0LjE2MjQ1IDE1Ni40OTggMy45MzM2OCAxNTUuODYyIDMuOTMzNjhaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTYxLjE4MiAwLjAxNzA1OTNIMTYyLjA4OEgxNjNWMTAuMTA3NUgxNjIuMDk1SDE2MS4xODJWMC4wMTcwNTkzWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTg1LjExNTcgMTQuODM2NUg4NS44NDEySDg2LjU2NjhMOTAuNzg3NyAyNC45MjdIODkuNzcwMUg4OC43NDUyTDg3Ljc0MjUgMjIuMzIzSDgzLjkzMkw4Mi45NTA1IDI0LjkyN0g4MS45MjU3SDgwLjg5MzhMODUuMTE1NyAxNC44MzY1Wk04NC41OTQ2IDIwLjU4NDNIODcuMDczNkw4NS44MjYgMTcuMzYwNkg4NS44MjA3TDg0LjU5NDYgMjAuNTg0M1oiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik05OS4xNzgyIDIyLjQ2MzJDOTguOTI1IDIzLjI4OTEgOTguNDU1NiAyMy45NDgyIDk3Ljc2OTUgMjQuNDQxMkM5Ny4wODQgMjQuOTMzOSA5Ni4yOTQ4IDI1LjE4MDMgOTUuNDAyNSAyNS4xODAzQzk0LjI5MjggMjUuMTgwMyA5My4zNDg0IDI0Ljc4ODQgOTIuNTY5NSAyNC4wMDQ5QzkxLjc4OTkgMjMuMjIxMSA5MS40MDA0IDIyLjI2OTkgOTEuNDAwNCAyMS4xNTA5QzkxLjQwMDQgMjAuMDMxOSA5MS43OTAyIDE5LjA3ODQgOTIuNTY5NSAxOC4yOTAzQzkzLjM0ODQgMTcuNTAyMiA5NC4yOTI4IDE3LjEwODMgOTUuNDAyNSAxNy4xMDgzQzk2LjMwMzggMTcuMTA4MyA5Ny4xMDA2IDE3LjM1OCA5Ny43OTI3IDE3Ljg1NzZDOTguNDg1NSAxOC4zNTczIDk4Ljk2MDUgMTkuMDI0NCA5OS4yMTc3IDE5Ljg1OTJIOTcuMTk0MUM5Ny4wMjA3IDE5LjUwNDEgOTYuNzc5NyAxOS4yMzMyIDk2LjQ3MTUgMTkuMDQ2NkM5Ni4xNjI2IDE4Ljg2MDIgOTUuODAwMyAxOC43NjY3IDk1LjM4MjYgMTguNzY2N0M5NC43ODMgMTguNzY2NyA5NC4yNzQyIDE4Ljk5MzIgOTMuODU0OSAxOS40NDYxQzkzLjQzNTMgMTkuODk5IDkzLjIyNTggMjAuNDQ5NCA5My4yMjU4IDIxLjA5NzlDOTMuMjI1OCAyMS43ODYyIDkzLjQ0MDYgMjIuMzYyMSA5My44NzExIDIyLjgyNjNDOTQuMzAxNyAyMy4yOTA0IDk0LjgzNDQgMjMuNTIyMiA5NS40Njk1IDIzLjUyMjJDOTUuODE5OCAyMy41MjIyIDk2LjE0NzMgMjMuNDI2NyA5Ni40NTE2IDIzLjIzNTdDOTYuNzU1MiAyMy4wNDQ3IDk2Ljk4OTYgMjIuNzg3MSA5Ny4xNTQgMjIuNDYzMkg5OS4xNzgyWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEwMy43NDYgMjUuMTgwM0MxMDIuNzA3IDI1LjE4MDMgMTAxLjgyMiAyNC43ODg0IDEwMS4wODkgMjQuMDA0OUMxMDAuMzU3IDIzLjIyMTEgOTkuOTkwMiAyMi4yNjk5IDk5Ljk5MDIgMjEuMTUwOUM5OS45OTAyIDIwLjAzMTkgMTAwLjM1NyAxOS4wNzg0IDEwMS4wODkgMTguMjkwM0MxMDEuODIyIDE3LjUwMjIgMTAyLjcwOSAxNy4xMDgzIDEwMy43NTMgMTcuMTA4M0MxMDQuNzYgMTcuMTA4MyAxMDUuNjE1IDE3LjQ3MDQgMTA2LjMxNiAxOC4xOTM4VjE3LjM2MTNIMTA3Ljk4N1YyNC45Mjc2SDEwNy4xNTVIMTA2LjMxNlYyNC4xMDE3QzEwNS42MDYgMjQuODE2MiAxMDQuNzQ5IDI1LjE3NiAxMDMuNzQ2IDI1LjE4MDNaTTEwNC4wNDUgMTguNzUzMUMxMDMuNDExIDE4Ljc1MzEgMTAyLjg4IDE4Ljk4MjkgMTAyLjQ1NCAxOS40NDI0QzEwMi4wMjggMTkuOTAyIDEwMS44MTUgMjAuNDcxNiAxMDEuODE1IDIxLjE1MDlDMTAxLjgxNSAyMS44MjYgMTAyLjAyOCAyMi4zOTE5IDEwMi40NTQgMjIuODQ5NUMxMDIuODggMjMuMzA3IDEwMy40MDggMjMuNTM1NCAxMDQuMDM5IDIzLjUzNTRDMTA0LjY3MyAyMy41MzU0IDEwNS4yMDYgMjMuMzA3IDEwNS42MzMgMjIuODQ5NUMxMDYuMDYyIDIyLjM5MjMgMTA2LjI3NiAyMS44MjM2IDEwNi4yNzYgMjEuMTQ0M0MxMDYuMjc2IDIwLjQ2NSAxMDYuMDYzIDE5Ljg5NjcgMTA1LjYzNiAxOS40MzkxQzEwNS4yMTEgMTguOTgxOSAxMDQuNjggMTguNzUzMSAxMDQuMDQ1IDE4Ljc1MzFaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTEyLjgzNSAyNS4xODA1QzExMS44IDI1LjE4MDUgMTEwLjkxOSAyNC43ODg2IDExMC4xODkgMjQuMDA1MkMxMDkuNDU4IDIzLjIyMTcgMTA5LjA5MyAyMi4yNzAyIDEwOS4wOTMgMjEuMTUxMkMxMDkuMDkzIDIwLjAzMjIgMTA5LjQ3MyAxOS4wNzg2IDExMC4yMzIgMTguMjkwNUMxMTAuOTkxIDE3LjUwMjQgMTExLjkwOSAxNy4xMDg2IDExMi45ODggMTcuMTA4NkMxMTMuODU0IDE3LjExNzUgMTE0LjYwNCAxNy40MDQgMTE1LjIzOSAxNy45Njc2VjE0LjgzNzRIMTE2LjE0NEgxMTcuMDU2VjI0LjkyNzlIMTE2LjIyNEgxMTUuMzg1VjI0LjEwODZDMTE0LjY3OSAyNC44MjMxIDExMy44MjkgMjUuMTgwNSAxMTIuODM1IDI1LjE4MDVaTTExMy4xMjggMTguNzUzNEMxMTIuNTAyIDE4Ljc1MzQgMTExLjk3NyAxOC45ODMyIDExMS41NTMgMTkuNDQyN0MxMTEuMTI5IDE5LjkwMjIgMTEwLjkxNyAyMC40NzE4IDExMC45MTcgMjEuMTUxMkMxMTAuOTE3IDIxLjgyNjIgMTExLjEyOSAyMi4zOTIyIDExMS41NSAyMi44NDk3QzExMS45NzEgMjMuMzA3MiAxMTIuNDk2IDIzLjUzNTcgMTEzLjEyMSAyMy41MzU3QzExMy43NTEgMjMuNTM1NyAxMTQuMjggMjMuMzA3MiAxMTQuNzA2IDIyLjg0OTdDMTE1LjEzMiAyMi4zOTI1IDExNS4zNDUgMjEuODIzOSAxMTUuMzQ1IDIxLjE0NDVDMTE1LjM0NSAyMC40NjUyIDExNS4xMzMgMTkuODk2OSAxMTQuNzA5IDE5LjQzOTRDMTE0LjI4NiAxOC45ODIyIDExMy43NTggMTguNzUzNCAxMTMuMTI4IDE4Ljc1MzRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTIxLjk5OCAyNS4xODAzQzEyMC45MDYgMjUuMTgwMyAxMTkuOTc0IDI0Ljc4ODQgMTE5LjIwNCAyNC4wMDQ5QzExOC40MzQgMjMuMjIxMSAxMTguMDQ5IDIyLjI2OTkgMTE4LjA0OSAyMS4xNTA5QzExOC4wNDkgMjAuMDMxOSAxMTguNDM0IDE5LjA3ODQgMTE5LjIwNCAxOC4yOTAzQzExOS45NzQgMTcuNTAyMiAxMjAuOTA2IDE3LjEwODMgMTIxLjk5OCAxNy4xMDgzQzEyMy4wOTQgMTcuMTA4MyAxMjQuMDI3IDE3LjUwMjIgMTI0Ljc5NyAxOC4yOTAzQzEyNS41NjcgMTkuMDc4NCAxMjUuOTUyIDIwLjAzMTkgMTI1Ljk1MiAyMS4xNTA5QzEyNS45NTIgMjEuNDIxOCAxMjUuOTMxIDIxLjY4ODQgMTI1Ljg4NiAyMS45NTAzSDExOS45ODdDMTIwLjA4OCAyMi4yNzg5IDEyMC4yNTkgMjIuNTc2MyAxMjAuNSAyMi44NDI4QzEyMC45MTIgMjMuMjk1NyAxMjEuNDI3IDIzLjUyMjIgMTIyLjA0NCAyMy41MjIyQzEyMi40MjYgMjMuNTIyMiAxMjIuNzc2IDIzLjQzMzMgMTIzLjA5MiAyMy4yNTU2QzEyMy40MSAyMy4wNzgyIDEyMy42NDQgMjIuODQwNSAxMjMuNzk1IDIyLjU0MzFIMTI1LjcxM0MxMjUuNDY5IDIzLjM0NjggMTI1LjAwOSAyMy45ODc0IDEyNC4zMzUgMjQuNDY0OEMxMjMuNjU5IDI0Ljk0MTYgMTIyLjg4MSAyNS4xODAzIDEyMS45OTggMjUuMTgwM1pNMTI0LjA1NSAyMC40OTgxQzEyMy45NjYgMjAuMDk4MyAxMjMuNzg2IDE5Ljc1MDEgMTIzLjUxNiAxOS40NTI0QzEyMy4xMDcgMTguOTk1MiAxMjIuNjAxIDE4Ljc2NjQgMTIxLjk5OCAxOC43NjY0QzEyMS4zOTQgMTguNzY2NCAxMjAuODg4IDE4Ljk5NTIgMTIwLjQ4IDE5LjQ1MjRDMTIwLjIxNyAxOS43NTQ0IDEyMC4wMzUgMjAuMTAyOSAxMTkuOTMzIDIwLjQ5ODFIMTI0LjA1NVoiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xMjcuMDk4IDE3LjM2MTNIMTI3Ljk0M0gxMjguNzg5VjE3Ljk4NzZDMTI5LjM0MyAxNy4zOTcxIDEyOS45OTkgMTcuMTA0MSAxMzAuNzU3IDE3LjEwODRDMTMxLjU5NSAxNy4xMDg0IDEzMi4yOTMgMTcuNDI4IDEzMi44NTEgMTguMDY3NUwxMzIuOTg0IDE4LjIyNzRMMTMzLjEzMSAxOC4wNjc1QzEzMy43MjIgMTcuNDI4MyAxMzQuNDg3IDE3LjEwODQgMTM1LjQyNCAxNy4xMDg0QzEzNi4zNTMgMTcuMTA4NCAxMzcuMDkgMTcuMzk5MSAxMzcuNjM0IDE3Ljk4MDdDMTM4LjE3OSAxOC41NjI2IDEzOC40NTEgMTkuMzUwNyAxMzguNDUxIDIwLjM0NTNWMjQuOTI3N0gxMzcuNTQ2SDEzNi42MzNWMjAuNjQ1QzEzNi42MzMgMjAuMDI4IDEzNi41MSAxOS41NTk1IDEzNi4yNjMgMTkuMjM5NkMxMzYuMDE2IDE4LjkyIDEzNS42NTcgMTguNzYwMiAxMzUuMTg1IDE4Ljc2MDJDMTM0LjY4MiAxOC43NjAyIDEzNC4zMDYgMTguOTQyMiAxMzQuMDU3IDE5LjMwNjJDMTMzLjgwOCAxOS42NzAzIDEzMy42ODMgMjAuMjE2MyAxMzMuNjgzIDIwLjk0NDRWMjQuOTI3M0gxMzIuNzc4SDEzMS44NjZWMjAuODUxM0MxMzEuODY2IDIwLjE2NzYgMTMxLjczOSAxOS42NDgxIDEzMS40ODcgMTkuMjkyNkMxMzEuMjM0IDE4LjkzNzUgMTMwLjg2NSAxOC43NTk4IDEzMC4zNzcgMTguNzU5OEMxMjkuODkgMTguNzU5OCAxMjkuNTI1IDE4Ljk0MTggMTI5LjI4MSAxOS4zMDU5QzEyOS4wMzcgMTkuNjY5OSAxMjguOTE2IDIwLjIxNiAxMjguOTE2IDIwLjk0NDFWMjQuOTI3SDEyOC4wMUgxMjcuMDk4VjE3LjM2MTNaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTQyLjU3MiAyNy40NzhIMTQxLjYxNEgxNDAuNjQ5TDE0Mi4wNTEgMjQuMjQ5VjI0LjI1NDdMMTM5LjI4MyAxNy4zNjFIMTQwLjMxSDE0MS4zMzZMMTQzLjA1NiAyMi4zMDMxSDE0My4wNjNMMTQ0LjkxMiAxNy4zNjFIMTQ1LjkzN0gxNDYuOTY3TDE0Mi41NzIgMjcuNDc4WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTgyLjMxNTggMzguODI0NEM4MS41MzE5IDM4LjA0MDYgODEuMTQwMSAzNy4wODk0IDgxLjE0MDEgMzUuOTcwNEM4MS4xNDAxIDM0Ljg1MTQgODEuNTMxOSAzMy44OTc5IDgyLjMxNTggMzMuMTA5OEM4My4wOTkxIDMyLjMyMTcgODQuMDQ3NyAzMS45Mjc4IDg1LjE2MjUgMzEuOTI3OEM4Ni4yODEyIDMxLjkyNzggODcuMjMyMSAzMi4zMjE3IDg4LjAxNTQgMzMuMTA5OEM4OC43OTg2IDMzLjg5NzkgODkuMTkwNCAzNC44NTE0IDg5LjE5MDQgMzUuOTcwNEM4OS4xOTA0IDM3LjA4OTQgODguNzk4NiAzOC4wNDA2IDg4LjAxNTQgMzguODI0NEM4Ny4yMzIxIDM5LjYwODIgODYuMjgxMiAzOS45OTk3IDg1LjE2MjUgMzkuOTk5N0M4NC4wNDc0IDQwLjAwMDEgODMuMDk5MSAzOS42MDgyIDgyLjMxNTggMzguODI0NFpNODYuNzMzNiAzNy42NjIzQzg3LjE1NDkgMzcuMjA5NCA4Ny4zNjYgMzYuNjQ1NCA4Ny4zNjYgMzUuOTcwNEM4Ny4zNjYgMzUuMjk1NCA4Ny4xNTQ5IDM0LjcyOTQgODYuNzMzNiAzNC4yNzE5Qzg2LjMxMjMgMzMuODE0MyA4NS43ODgzIDMzLjU4NTkgODUuMTYyNSAzMy41ODU5Qzg0LjU0MSAzMy41ODU5IDg0LjAxOTIgMzMuODE0NyA4My41OTc2IDM0LjI3MTlDODMuMTc1NyAzNC43MjkxIDgyLjk2NTIgMzUuMjk1NCA4Mi45NjUyIDM1Ljk3MDRDODIuOTY1MiAzNi42NDU0IDgzLjE3NTcgMzcuMjA5MSA4My41OTc2IDM3LjY2MjNDODQuMDE4OSAzOC4xMTUyIDg0LjU0MSAzOC4zNDE3IDg1LjE2MjUgMzguMzQxN0M4NS43ODgzIDM4LjM0MTcgODYuMzEyIDM4LjExNTIgODYuNzMzNiAzNy42NjIzWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTkyLjE5OTkgMzMuNzc5M1YzOS43NDcySDkxLjI5NDRIOTAuMzgyMlYzMy43NzkzSDg5LjczNjhWMzIuMTgwOUg5MC4zODIyQzkwLjQxNzcgMzEuMzY4MyA5MC42NDgzIDMwLjcyMDEgOTEuMDc0MyAzMC4yMzZDOTEuNTMyIDI5LjcxNjUgOTIuMTY2NSAyOS40NTY1IDkyLjk3ODkgMjkuNDU2NUw5My4zNDUxIDI5LjQ2MzJWMzEuMjI4M0g5My4yNTJDOTIuODc5MSAzMS4yMjgzIDkyLjYxMDMgMzEuMzAxNiA5Mi40NDU5IDMxLjQ0ODJDOTIuMjgxNSAzMS41OTQ3IDkyLjE5OTkgMzEuODMyMSA5Mi4xOTk5IDMyLjE2MDdWMzIuMTgwNkg5My4yNzE5VjMzLjc3OUg5Mi4xOTk5VjMzLjc3OTNaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTAxLjc0MiAzMi4zMjY4QzEwMS43MDIgMzEuOTQ5NSAxMDEuNTg4IDMxLjY2NjMgMTAxLjM5OSAzMS40Nzc3QzEwMS4yMSAzMS4yODkgMTAwLjk1MiAzMS4xOTQ1IDEwMC42MjQgMzEuMTk0NUMxMDAuMzEzIDMxLjE5NDUgMTAwLjA1OSAzMS4yOTIzIDk5Ljg2MTEgMzEuNDg3NkM5OS42NjM1IDMxLjY4MzIgOTkuNTY1MSAzMS45MzM5IDk5LjU2NTEgMzIuMjQwMkM5OS41NjUxIDMyLjU1OTggOTkuNjY0OCAzMi44MDg4IDk5Ljg2NDcgMzIuOTg2MkMxMDAuMDYgMzMuMTU5MyAxMDAuNDQxIDMzLjM0MzYgMTAxLjAxIDMzLjUzODlDMTAyLjA0OCAzMy44OTQzIDEwMi43ODggMzQuMzEzOCAxMDMuMjI3IDM0Ljc5NzhDMTAzLjY2NiAzNS4yODE5IDEwMy44ODUgMzUuOTIxMSAxMDMuODg1IDM2LjcxNjJDMTAzLjg4NSAzNy42NjIxIDEwMy41NzggMzguNDM2NiAxMDIuOTY2IDM5LjA0MDdDMTAyLjM1MyAzOS42NDQ0IDEwMS41NjggMzkuOTQ2NSAxMDAuNjA5IDM5Ljk0NjVDOTkuNzAyOSAzOS45NDY1IDk4Ljk0NzIgMzkuNjYyMyA5OC4zNDA2IDM5LjA5NDFDOTcuNzM0NyAzOC41MjU4IDk3LjM5NiAzNy43ODQxIDk3LjMyNTcgMzYuODY5N0g5OS4yODMzQzk5LjMzMTcgMzcuMzA0NyA5OS40NzI5IDM3LjYzNjYgOTkuNzA1OSAzNy44NjUzQzk5LjkzODMgMzguMDkzOCAxMDAuMjUyIDM4LjIwODIgMTAwLjY0OCAzOC4yMDgyQzEwMS4wNTYgMzguMjA4MiAxMDEuMzkgMzguMDkwOCAxMDEuNjQ5IDM3Ljg1NTRDMTAxLjkwOSAzNy42MiAxMDIuMDM5IDM3LjMxNTkgMTAyLjAzOSAzNi45NDNDMTAyLjAzOSAzNi41MzQ1IDEwMS45MTMgMzYuMjE0OSAxMDEuNjYgMzUuOTgzOEMxMDEuNDExIDM1Ljc1NzMgMTAwLjkyMyAzNS41MTk5IDEwMC4xOTUgMzUuMjcxM0M5OS4yOTg2IDM0Ljk2NDkgOTguNjYyMiAzNC41ODk2IDk4LjI4NDYgMzQuMTQ1N0M5Ny45MDcxIDMzLjcwMTcgOTcuNzE4OCAzMy4xMDg5IDk3LjcxODggMzIuMzY3MkM5Ny43MTg4IDMxLjUxNDggOTcuOTk2NiAzMC44MTY2IDk4LjU1MTQgMzAuMjcyNUM5OS4xMDYzIDI5LjcyODcgOTkuODE5IDI5LjQ1NjUgMTAwLjY4OSAyOS40NTY1QzEwMS40OTMgMjkuNDU2NSAxMDIuMTc4IDI5LjczMDcgMTAyLjc0NiAzMC4yNzkxQzEwMy4zMTUgMzAuODI3NSAxMDMuNjE5IDMxLjUxMDIgMTAzLjY1OSAzMi4zMjcxTDEwMS43NDIgMzIuMzI2OFoiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xMTIuNTM1IDM3LjI4MjdDMTEyLjI4MiAzOC4xMDg2IDExMS44MTMgMzguNzY3NyAxMTEuMTI3IDM5LjI2MDdDMTEwLjQ0MiAzOS43NTM0IDEwOS42NTMgMzkuOTk5NyAxMDguNzYgMzkuOTk5N0MxMDcuNjUgMzkuOTk5NyAxMDYuNzA2IDM5LjYwNzggMTA1LjkyNyAzOC44MjQ0QzEwNS4xNDggMzguMDQwOSAxMDQuNzU4IDM3LjA4OTQgMTA0Ljc1OCAzNS45NzA0QzEwNC43NTggMzQuODUxNCAxMDUuMTQ4IDMzLjg5NzkgMTA1LjkyNyAzMy4xMDk4QzEwNi43MDYgMzIuMzIxNyAxMDcuNjUgMzEuOTI3OCAxMDguNzYgMzEuOTI3OEMxMDkuNjYxIDMxLjkyNzggMTEwLjQ1OCAzMi4xNzc1IDExMS4xNTEgMzIuNjc3MUMxMTEuODQzIDMzLjE3NjcgMTEyLjMxOCAzMy44NDM4IDExMi41NzYgMzQuNjc4N0gxMTAuNTUxQzExMC4zNzkgMzQuMzIzNiAxMTAuMTM4IDM0LjA1MjcgMTA5LjgyOSAzMy44NjZDMTA5LjUyIDMzLjY3OTcgMTA5LjE1NyAzMy41ODYyIDEwOC43NDEgMzMuNTg2MkMxMDguMTQxIDMzLjU4NjIgMTA3LjYzMSAzMy44MTI3IDEwNy4yMTIgMzQuMjY1NkMxMDYuNzkyIDM0LjcxODUgMTA2LjU4MyAzNS4yNjg4IDEwNi41ODMgMzUuOTE3M0MxMDYuNTgzIDM2LjYwNTcgMTA2Ljc5OCAzNy4xODE2IDEwNy4yMjkgMzcuNjQ1N0MxMDcuNjYgMzguMTA5OSAxMDguMTkyIDM4LjM0MTcgMTA4LjgyNyAzOC4zNDE3QzEwOS4xNzggMzguMzQxNyAxMDkuNTA1IDM4LjI0NjIgMTA5LjgwOSAzOC4wNTUyQzExMC4xMTMgMzcuODY0MiAxMTAuMzQ3IDM3LjYwNjYgMTEwLjUxMiAzNy4yODI3SDExMi41MzVaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTEzLjcwNyAyOS42NTZIMTE1LjUyNVYzMS4zMjFIMTEzLjcwN1YyOS42NTZaTTExMy43MDcgMzIuMTgwNEgxMTQuNjEzSDExNS41MjVWMzkuNzQ2OEgxMTQuNjE5SDExMy43MDdWMzIuMTgwNFoiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xMjAuNjI2IDM5Ljk5OTdDMTE5LjUzNCAzOS45OTk3IDExOC42MDMgMzkuNjA3OSAxMTcuODMyIDM4LjgyNDRDMTE3LjA2MyAzOC4wNDA2IDExNi42NzcgMzcuMDg5NCAxMTYuNjc3IDM1Ljk3MDRDMTE2LjY3NyAzNC44NTE0IDExNy4wNjMgMzMuODk3OSAxMTcuODMyIDMzLjEwOThDMTE4LjYwMyAzMi4zMjE3IDExOS41MzQgMzEuOTI3OCAxMjAuNjI2IDMxLjkyNzhDMTIxLjcyMyAzMS45Mjc4IDEyMi42NTUgMzIuMzIxNyAxMjMuNDI1IDMzLjEwOThDMTI0LjE5NSAzMy44OTc5IDEyNC41ODEgMzQuODUxNCAxMjQuNTgxIDM1Ljk3MDRDMTI0LjU4MSAzNi4yNDEzIDEyNC41NTkgMzYuNTA3OCAxMjQuNTE0IDM2Ljc2OThIMTE4LjYxNUMxMTguNzE3IDM3LjA5ODMgMTE4Ljg4NyAzNy4zOTU3IDExOS4xMjggMzcuNjYyM0MxMTkuNTQgMzguMTE1MiAxMjAuMDU1IDM4LjM0MTcgMTIwLjY3MiAzOC4zNDE3QzEyMS4wNTQgMzguMzQxNyAxMjEuNDA0IDM4LjI1MjggMTIxLjcyMSAzOC4wNzUxQzEyMi4wMzggMzcuODk3NyAxMjIuMjczIDM3LjY2IDEyMi40MjMgMzcuMzYyNkgxMjQuMzQxQzEyNC4wOTcgMzguMTY2MyAxMjMuNjM3IDM4LjgwNjggMTIyLjk2MyAzOS4yODQzQzEyMi4yODggMzkuNzYxNyAxMjEuNTA5IDM5Ljk5OTcgMTIwLjYyNiAzOS45OTk3Wk0xMjIuNjgzIDM1LjMxNzZDMTIyLjU5NCAzNC45MTc3IDEyMi40MTQgMzQuNTY5NiAxMjIuMTQ0IDM0LjI3MTlDMTIxLjczNiAzMy44MTQ3IDEyMS4yMjkgMzMuNTg1OSAxMjAuNjI2IDMzLjU4NTlDMTIwLjAyMiAzMy41ODU5IDExOS41MTYgMzMuODE0NyAxMTkuMTA4IDM0LjI3MTlDMTE4Ljg0NiAzNC41NzM5IDExOC42NjQgMzQuOTIyNCAxMTguNTYyIDM1LjMxNzZIMTIyLjY4M1oiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xMjUuNzI2IDMyLjE4MDhIMTI2LjU3MUgxMjcuNDE3VjMyLjgzMzZDMTI4LjAwNCAzMi4yMjk4IDEyOC43MDUgMzEuOTI3OCAxMjkuNTIyIDMxLjkyNzhDMTMwLjQxOCAzMS45Mjc4IDEzMS4xMyAzMi4yMzA4IDEzMS42NTYgMzIuODM2OUMxMzIuMTgyIDMzLjQ0MyAxMzIuNDQ1IDM0LjI2MTMgMTMyLjQ0NSAzNS4yOTExVjM5Ljc0NjhIMTMxLjUzOUgxMzAuNjI3VjM1LjY5NzJDMTMwLjYyNyAzNS4wMDQ2IDEzMC40OTggMzQuNDc4NCAxMzAuMjQxIDM0LjExODdDMTI5Ljk4NCAzMy43NTkzIDEyOS42MDggMzMuNTc5MyAxMjkuMTE1IDMzLjU3OTNDMTI4LjU5MiAzMy41NzkzIDEyOC4xOTkgMzMuNzYxMyAxMjcuOTM3IDM0LjEyNTNDMTI3LjY3NSAzNC40ODk0IDEyNy41NDQgMzUuMDM1NCAxMjcuNTQ0IDM1Ljc2MzVWMzkuNzQ2NEgxMjYuNjM4SDEyNS43MjZWMzIuMTgwOEgxMjUuNzI2WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE0MS40NTQgMzcuMjgyN0MxNDEuMjAxIDM4LjEwODYgMTQwLjczMiAzOC43Njc3IDE0MC4wNDUgMzkuMjYwN0MxMzkuMzYgMzkuNzUzNCAxMzguNTcxIDM5Ljk5OTcgMTM3LjY3OCAzOS45OTk3QzEzNi41NjkgMzkuOTk5NyAxMzUuNjI0IDM5LjYwNzggMTM0Ljg0NSAzOC44MjQ0QzEzNC4wNjYgMzguMDQwNiAxMzMuNjc2IDM3LjA4OTQgMTMzLjY3NiAzNS45NzA0QzEzMy42NzYgMzQuODUxNCAxMzQuMDY2IDMzLjg5NzkgMTM0Ljg0NSAzMy4xMDk4QzEzNS42MjQgMzIuMzIxNyAxMzYuNTY5IDMxLjkyNzggMTM3LjY3OCAzMS45Mjc4QzEzOC41OCAzMS45Mjc4IDEzOS4zNzYgMzIuMTc3NSAxNDAuMDY5IDMyLjY3NzFDMTQwLjc2MSAzMy4xNzY3IDE0MS4yMzYgMzMuODQzOCAxNDEuNDk0IDM0LjY3ODdIMTM5LjQ3QzEzOS4yOTcgMzQuMzIzNiAxMzkuMDU2IDM0LjA1MjcgMTM4Ljc0NyAzMy44NjZDMTM4LjQzOCAzMy42Nzk3IDEzOC4wNzYgMzMuNTg2MiAxMzcuNjU4IDMzLjU4NjJDMTM3LjA1OSAzMy41ODYyIDEzNi41NSAzMy44MTI3IDEzNi4xMzEgMzQuMjY1NkMxMzUuNzExIDM0LjcxODUgMTM1LjUwMiAzNS4yNjg4IDEzNS41MDIgMzUuOTE3M0MxMzUuNTAyIDM2LjYwNTcgMTM1LjcxNiAzNy4xODE2IDEzNi4xNDcgMzcuNjQ1N0MxMzYuNTc4IDM4LjEwOTkgMTM3LjExIDM4LjM0MTcgMTM3Ljc0NSAzOC4zNDE3QzEzOC4wOTYgMzguMzQxNyAxMzguNDIzIDM4LjI0NjIgMTM4LjcyNyAzOC4wNTUyQzEzOS4wMzEgMzcuODY0MiAxMzkuMjY1IDM3LjYwNjYgMTM5LjQzIDM3LjI4MjdIMTQxLjQ1NFoiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNDYuMjY4IDM5Ljk5OTdDMTQ1LjE3NiAzOS45OTk3IDE0NC4yNDQgMzkuNjA3OSAxNDMuNDc0IDM4LjgyNDRDMTQyLjcwNSAzOC4wNDA2IDE0Mi4zMTkgMzcuMDg5NCAxNDIuMzE5IDM1Ljk3MDRDMTQyLjMxOSAzNC44NTE0IDE0Mi43MDUgMzMuODk3OSAxNDMuNDc0IDMzLjEwOThDMTQ0LjI0NCAzMi4zMjE3IDE0NS4xNzYgMzEuOTI3OCAxNDYuMjY4IDMxLjkyNzhDMTQ3LjM2NSAzMS45Mjc4IDE0OC4yOTcgMzIuMzIxNyAxNDkuMDY4IDMzLjEwOThDMTQ5LjgzOCAzMy44OTc5IDE1MC4yMjIgMzQuODUxNCAxNTAuMjIyIDM1Ljk3MDRDMTUwLjIyMiAzNi4yNDEzIDE1MC4yMDEgMzYuNTA3OCAxNTAuMTU3IDM2Ljc2OThIMTQ0LjI1N0MxNDQuMzU5IDM3LjA5ODMgMTQ0LjUyOSAzNy4zOTU3IDE0NC43NyAzNy42NjIzQzE0NS4xODIgMzguMTE1MiAxNDUuNjk3IDM4LjM0MTcgMTQ2LjMxNCAzOC4zNDE3QzE0Ni42OTYgMzguMzQxNyAxNDcuMDQ2IDM4LjI1MjggMTQ3LjM2MyAzOC4wNzUxQzE0Ny42OCAzNy44OTc3IDE0Ny45MTQgMzcuNjYgMTQ4LjA2NSAzNy4zNjI2SDE0OS45ODNDMTQ5LjczOSAzOC4xNjYzIDE0OS4yNzkgMzguODA2OCAxNDguNjA1IDM5LjI4NDNDMTQ3LjkzIDM5Ljc2MTcgMTQ3LjE1MSAzOS45OTk3IDE0Ni4yNjggMzkuOTk5N1pNMTQ4LjMyNSAzNS4zMTc2QzE0OC4yMzYgMzQuOTE3NyAxNDguMDU2IDM0LjU2OTYgMTQ3Ljc4NiAzNC4yNzE5QzE0Ny4zNzcgMzMuODE0NyAxNDYuODcxIDMzLjU4NTkgMTQ2LjI2OCAzMy41ODU5QzE0NS42NjQgMzMuNTg1OSAxNDUuMTU4IDMzLjgxNDcgMTQ0Ljc1IDM0LjI3MTlDMTQ0LjQ4NyAzNC41NzM5IDE0NC4zMDUgMzQuOTIyNCAxNDQuMjAzIDM1LjMxNzZIMTQ4LjMyNVoiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNTQuNDA3IDM0LjIyNTJDMTU0LjM2MyAzNC4wMTIgMTU0LjI3OCAzMy44NTIyIDE1NC4xNTMgMzMuNzQ1NUMxNTQuMDI5IDMzLjYzOSAxNTMuODY5IDMzLjU4NTYgMTUzLjY3MyAzMy41ODU2QzE1My40NjUgMzMuNTg1NiAxNTMuMjk0IDMzLjY0NTcgMTUzLjE2MyAzMy43NjUzQzE1My4wMzIgMzMuODg1IDE1Mi45NjcgMzQuMDQwOSAxNTIuOTY3IDM0LjIzMTVDMTUyLjk2NyAzNC40MTM1IDE1My4wNDggMzQuNTYwMSAxNTMuMjEzIDM0LjY3MTFDMTUzLjM3NyAzNC43ODIyIDE1My42OTIgMzQuOTA4OSAxNTQuMTU5IDM1LjA1MDhDMTU0Ljk1MyAzNS4yOTUxIDE1NS41MjEgMzUuNTk5MiAxNTUuODYzIDM1Ljk2MzJDMTU2LjIgMzYuMzI3MiAxNTYuMzY4IDM2LjgxMTMgMTU2LjM2OCAzNy40MTUxQzE1Ni4zNjggMzguMTc0NiAxNTYuMTE4IDM4Ljc5NSAxNTUuNjE2IDM5LjI3NjdDMTU1LjExNCAzOS43NTg1IDE1NC40NyAzOS45OTkyIDE1My42ODQgMzkuOTk5MkMxNTIuODkgMzkuOTk5MiAxNTIuMjMzIDM5Ljc1NjIgMTUxLjcxNiAzOS4yNjk4QzE1MS4xOTggMzguNzgzNyAxNTAuOTIyIDM4LjE0NzUgMTUwLjg4NiAzNy4zNjE3SDE1Mi43NTFDMTUyLjgwNCAzNy42ODEzIDE1Mi45MTMgMzcuOTI0NyAxNTMuMDc3IDM4LjA5MTFDMTUzLjI0MiAzOC4yNTc1IDE1My40NTUgMzguMzQwOCAxNTMuNzE3IDM4LjM0MDhDMTUzLjk2NSAzOC4zNDA4IDE1NC4xNyAzOC4yNzE4IDE1NC4zMyAzOC4xMzQyQzE1NC40OSAzNy45OTY2IDE1NC41NyAzNy44MTg5IDE1NC41NyAzNy42MDE0QzE1NC41NyAzNy4zNjYzIDE1NC40OTcgMzcuMTg0MyAxNTQuMzUzIDM3LjA1NTNDMTU0LjIwNiAzNi45MjY3IDE1My45MjQgMzYuNzk3NyAxNTMuNTA3IDM2LjY2OTFDMTUyLjY2NyAzNi40MTE1IDE1Mi4wNjUgMzYuMTAwOCAxNTEuNzAxIDM1LjczNjhDMTUxLjM0MSAzNS4zNzcgMTUxLjE2MiAzNC45MDE5IDE1MS4xNjIgMzQuMzExNEMxNTEuMTYyIDMzLjYwOTkgMTUxLjQwMiAzMy4wMzY5IDE1MS44ODEgMzIuNTkzQzE1Mi4zNjEgMzIuMTQ5IDE1Mi45NzYgMzEuOTI2OSAxNTMuNzI2IDMxLjkyNjlDMTU0LjM4NCAzMS45MjY5IDE1NC45NDggMzIuMTQ2NyAxNTUuNDE4IDMyLjU4NjRDMTU1Ljg4OSAzMy4wMjYgMTU2LjE0NCAzMy41NzIxIDE1Ni4xODQgMzQuMjI0OUwxNTQuNDA3IDM0LjIyNTJaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNNzEuODQ2OCAwLjA2MzE0MDlINjkuNDkzNFYzOS45NTYxSDcxLjg0NjhWMC4wNjMxNDA5WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTU5LjExNDUgMEgwVjM5Ljk2NDVINTkuMTE0NVYwWiIgZmlsbD0iIzAwMjc3NSIvPgo8cGF0aCBkPSJNNi4zMDc4NiA5LjY0ODU0SDguNTQ2MjVIMTAuNzg0M1YzMy44NzQzSDguNTQ2MjVINi4zMDc4NlY5LjY0ODU0WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTIzLjQ3NzYgOS42NDg1NEgyNS4yMjAxSDI2Ljk2MjZMMzcuMDk4MiAzMy44NzQzSDM0LjY1MzlIMzIuMTkzOEwyOS43ODYgMjcuNjIxOUgyMC42MzY5TDE4LjI4MTIgMzMuODc0M0gxNS44MTk0SDEzLjM0MkwyMy40Nzc2IDkuNjQ4NTRaTTIyLjIyNzMgMjMuNDQ4NEgyOC4xNzg0TDI1LjE4MyAxNS43MDg2SDI1LjE3MDRMMjIuMjI3MyAyMy40NDg0WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTQ4LjM1MzMgMTYuMDYwN0M0OC4yNTc1IDE1LjE1NDUgNDcuOTgzMSAxNC40NzUyIDQ3LjUzMDMgMTQuMDIxOUM0Ny4wNzc1IDEzLjU2OSA0Ni40NTY3IDEzLjM0MjMgNDUuNjY4NCAxMy4zNDIzQzQ0LjkyMjYgMTMuMzQyMyA0NC4zMTI3IDEzLjU3NyA0My44Mzg0IDE0LjA0NThDNDMuMzY0NCAxNC41MTUgNDMuMTI3MSAxNS4xMTc0IDQzLjEyNzEgMTUuODUyOEM0My4xMjcxIDE2LjYyMDMgNDMuMzY3MSAxNy4yMTc0IDQzLjg0NjQgMTcuNjQzNUM0NC4zMTU0IDE4LjA1OTIgNDUuMjMxOSAxOC41MDE5IDQ2LjU5NjUgMTguOTcwN0M0OS4wOTA4IDE5LjgyMzggNTAuODY1NSAyMC44MzE0IDUxLjkyMDkgMjEuOTkzMUM1Mi45NzM5IDIzLjE1NTIgNTMuNTAwMyAyNC42OTAzIDUzLjUwMDMgMjYuNTk4NEM1My41MDAzIDI4Ljg2ODggNTIuNzY0NCAzMC43Mjk1IDUxLjI5MzQgMzIuMTc5QzQ5LjgyMjQgMzMuNjI4OSA0Ny45MzU3IDM0LjM1MzcgNDUuNjMzMyAzNC4zNTM3QzQzLjQ1ODYgMzQuMzUzNyA0MS42NDQxIDMzLjY3MTcgNDAuMTg5IDMyLjMwN0MzOC43MzQyIDMwLjk0MjcgMzcuOTIxMSAyOS4xNjIyIDM3Ljc1MDcgMjYuOTY2SDQyLjQ1MDlDNDIuNTY3OSAyOC4wMTExIDQyLjkwNjMgMjguODA3OCA0My40NjU5IDI5LjM1NjVDNDQuMDI1IDI5LjkwNTYgNDQuNzc5MSAzMC4xODAxIDQ1LjcyNzQgMzAuMTgwMUM0Ni43MDc2IDMwLjE4MDEgNDcuNTA5MSAyOS44OTggNDguMTMyNiAyOS4zMzI3QzQ4Ljc1NiAyOC43Njc3IDQ5LjA2NzYgMjguMDM3MyA0OS4wNjc2IDI3LjE0MThDNDkuMDY3NiAyNi4xNjEgNDguNzY0MyAyNS4zOTM1IDQ4LjE1NzcgMjQuODM5MUM0Ny41NjExIDI0LjI5NTQgNDYuMzg5IDIzLjcyNTEgNDQuNjQxNiAyMy4xMjhDNDIuNDg5IDIyLjM5MjMgNDAuOTYwMyAyMS40OTE4IDQwLjA1NDcgMjAuNDI1NUMzOS4xNDg5IDE5LjM1OTYgMzguNjk2NCAxNy45MzY2IDM4LjY5NjQgMTYuMTU2MUMzOC42OTY0IDE0LjEwOTUgMzkuMzYyMyAxMi40MzMxIDQwLjY5NDggMTEuMTI3MkM0Mi4wMjczIDkuODIxMTkgNDMuNzM3NyA5LjE2ODM3IDQ1LjgyNjkgOS4xNjgzN0M0Ny43NTU3IDkuMTY4MzcgNDkuNDAyNCA5LjgyNjgyIDUwLjc2NjcgMTEuMTQzMUM1Mi4xMzEgMTIuNDU5NyA1Mi44NjEyIDE0LjA5ODkgNTIuOTU3IDE2LjA2MDNINDguMzUzM1YxNi4wNjA3WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTguNTg4OTIgNy4zOTg5NUM5Ljk3Mzk4IDcuMzk4OTUgMTEuMDk2OCA2LjI3NTg1IDExLjA5NjggNC44OTA0M0MxMS4wOTY4IDMuNTA1MDEgOS45NzM5OCAyLjM4MTkxIDguNTg4OTIgMi4zODE5MUM3LjIwMzg3IDIuMzgxOTEgNi4wODEwNSAzLjUwNTAxIDYuMDgxMDUgNC44OTA0M0M2LjA4MTA1IDYuMjc1ODUgNy4yMDM4NyA3LjM5ODk1IDguNTg4OTIgNy4zOTg5NVoiIGZpbGw9IiNGRjczMkMiLz4KPC9zdmc+Cg==">


                                </h1>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="padding: 0 2.5em; text-align: left;">
                                <div class="text">
                                    <h2>@yield('title')</h2>
                                    <p style="line-height: 1.4em; color: #858585;     font-weight: 200;  font-size: 1.2em;">
                                        @yield('description')
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <table class="bg_white" role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">

                    <tr>
                        <td valign="middle" style="text-align:left; padding: 1em 2.5em;">

                            @yield('content')

                        </td>
                    </tr>
                </table>
            </tr><!-- end tr -->
            <!-- 1 Column Text + Button : END -->
        </table>

        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="middle" class="bg_light footer email-section" style="background: #f7fafa;border-top-color: rgba( 0 , 0 , 0 , 0.05 );border-top-style: solid;border-top-width: 1px;color: rgba( 0 , 0 , 0 , 0.5 );padding: 2.5em;">
                    <table>
                        <tr>
                            <td valign="top" width="100%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-right: 10px;">
                                            <h3 class="heading">© {{  now()->year }} {{ config('app.name')}}</h3>
                                            <p></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr><!-- end: tr -->
            <tr>
                <td class="bg_white" style="text-align: center; ">
                    <p style="margin: 4px 0">{{ config('site.mail.dont_want_to_receive_notifications') }} {{ config('app.mail_admin')}} </p>
                </td>
            </tr>
        </table>

    </div>
</center>
</body>
</html>
