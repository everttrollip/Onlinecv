
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>EFT Payment Details</title>
  <!-- <style> -->
</head>
<body>
  <span class="preheader"></span>
  <table class="body">
    <tr>
      <td class="center" align="center" valign="top">
        <center data-parsed="">

            <table class="spacer float-center"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table>

            <table align="center" class="container float-center"><tbody><tr><td>

              <table class="spacer"><tbody><tr><td height="24px" style="font-size:24px;line-height:24px;">&#xA0;</td></tr></tbody></table>

              <table class="row"><tbody><tr>
                <th class="small-12 large-12 columns first last"><table><tr><th>

                <p class="lead">Hi there {{$user->firstname}}!</p>
                <p style="color: #484848; line-height: 1.5;">We've received your voucher order from <a href="http://onlinecv.link">OnlineCV!</a>
                To activate your vouchers please pay the outstanding amount via EFT</p>
                <table class="spacer"><tbody><tr><td height="24px" style="font-size:24px;line-height:24px;">&#xA0;</td></tr></tbody></table>

                <p><strong>EFT Payment Details</strong></p>
                <p><strong>Account Number:</strong> 1234xxx </p>
                <p><strong>Reference Number:</strong> #{{$order->id}} </p>
                <p><strong>Amount:</strong> R{{$order->total_amount}} </p>

                <table class="spacer"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table>

                <p>Greetings,</p>
                <p>The OnlineCV Team</p>


                <table class="spacer"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table>

                </th>
<th class="expander"></th></tr></table></th>
              </tr></tbody></table>
            </td></tr></tbody></table>

            <table class="spacer float-center"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table>

            <table class="spacer float-center"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table>



        </center>
      </td>
    </tr>
  </table>
  <!-- prevent Gmail on iOS font size manipulation -->
  <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
</body>
</html>
<style>
.wrapper {
    width: 100%; }

  #outlook a {
    padding: 0; }

  body {
    width: 100% !important;
    min-width: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    margin: 0;
    Margin: 0;
    padding: 0;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box; }

  .ExternalClass {
    width: 100%; }
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%; }

  #backgroundTable {
    margin: 0;
    Margin: 0;
    padding: 0;
    width: 100% !important;
    line-height: 100% !important; }

  img {
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
    width: auto;
    max-width: 100%;
    clear: both;
    display: block; }

  center {
    width: 100%;
    min-width: 580px; }

  a img {
    border: none; }

  p {
    margin: 0 0 0 10px;
    Margin: 0 0 0 10px; }

  table {
    border-spacing: 0;
    border-collapse: collapse; }

  td {
    word-wrap: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
    border-collapse: collapse !important; }

  table, tr, td {
    padding: 0;
    vertical-align: top;
    text-align: left; }

  @media only screen {
    html {
      min-height: 100%;
      background: #f3f3f3; } }

  table.body {
    background: #f3f3f3;
    height: 100%;
    width: 100%; }

  table.container {
    background: #fefefe;
    width: 580px;
    margin: 0 auto;
    Margin: 0 auto;
    text-align: inherit; }

  table.row {
    padding: 0;
    width: 100%;
    position: relative; }

  table.spacer {
    width: 100%; }
    table.spacer td {
      mso-line-height-rule: exactly; }

  table.container table.row {
    display: table; }

  td.columns,
  td.column,
  th.columns,
  th.column {
    margin: 0 auto;
    Margin: 0 auto;
    padding-left: 16px;
    padding-bottom: 16px; }
    td.columns .column,
    td.columns .columns,
    td.column .column,
    td.column .columns,
    th.columns .column,
    th.columns .columns,
    th.column .column,
    th.column .columns {
      padding-left: 0 !important;
      padding-right: 0 !important; }
      td.columns .column center,
      td.columns .columns center,
      td.column .column center,
      td.column .columns center,
      th.columns .column center,
      th.columns .columns center,
      th.column .column center,
      th.column .columns center {
        min-width: none !important; }

  td.columns.last,
  td.column.last,
  th.columns.last,
  th.column.last {
    padding-right: 16px; }

  td.columns table:not(.button),
  td.column table:not(.button),
  th.columns table:not(.button),
  th.column table:not(.button) {
    width: 100%; }

  td.large-1,
  th.large-1 {
    width: 32.33333px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-1.first,
  th.large-1.first {
    padding-left: 16px; }

  td.large-1.last,
  th.large-1.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-1,
  .collapse > tbody > tr > th.large-1 {
    padding-right: 0;
    padding-left: 0;
    width: 48.33333px; }

  .collapse td.large-1.first,
  .collapse th.large-1.first,
  .collapse td.large-1.last,
  .collapse th.large-1.last {
    width: 56.33333px; }

  td.large-1 center,
  th.large-1 center {
    min-width: 0.33333px; }

  .body .columns td.large-1,
  .body .column td.large-1,
  .body .columns th.large-1,
  .body .column th.large-1 {
    width: 8.33333%; }

  td.large-2,
  th.large-2 {
    width: 80.66667px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-2.first,
  th.large-2.first {
    padding-left: 16px; }

  td.large-2.last,
  th.large-2.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-2,
  .collapse > tbody > tr > th.large-2 {
    padding-right: 0;
    padding-left: 0;
    width: 96.66667px; }

  .collapse td.large-2.first,
  .collapse th.large-2.first,
  .collapse td.large-2.last,
  .collapse th.large-2.last {
    width: 104.66667px; }

  td.large-2 center,
  th.large-2 center {
    min-width: 48.66667px; }

  .body .columns td.large-2,
  .body .column td.large-2,
  .body .columns th.large-2,
  .body .column th.large-2 {
    width: 16.66667%; }

  td.large-3,
  th.large-3 {
    width: 129px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-3.first,
  th.large-3.first {
    padding-left: 16px; }

  td.large-3.last,
  th.large-3.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-3,
  .collapse > tbody > tr > th.large-3 {
    padding-right: 0;
    padding-left: 0;
    width: 145px; }

  .collapse td.large-3.first,
  .collapse th.large-3.first,
  .collapse td.large-3.last,
  .collapse th.large-3.last {
    width: 153px; }

  td.large-3 center,
  th.large-3 center {
    min-width: 97px; }

  .body .columns td.large-3,
  .body .column td.large-3,
  .body .columns th.large-3,
  .body .column th.large-3 {
    width: 25%; }

  td.large-4,
  th.large-4 {
    width: 177.33333px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-4.first,
  th.large-4.first {
    padding-left: 16px; }

  td.large-4.last,
  th.large-4.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-4,
  .collapse > tbody > tr > th.large-4 {
    padding-right: 0;
    padding-left: 0;
    width: 193.33333px; }

  .collapse td.large-4.first,
  .collapse th.large-4.first,
  .collapse td.large-4.last,
  .collapse th.large-4.last {
    width: 201.33333px; }

  td.large-4 center,
  th.large-4 center {
    min-width: 145.33333px; }

  .body .columns td.large-4,
  .body .column td.large-4,
  .body .columns th.large-4,
  .body .column th.large-4 {
    width: 33.33333%; }

  td.large-5,
  th.large-5 {
    width: 225.66667px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-5.first,
  th.large-5.first {
    padding-left: 16px; }

  td.large-5.last,
  th.large-5.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-5,
  .collapse > tbody > tr > th.large-5 {
    padding-right: 0;
    padding-left: 0;
    width: 241.66667px; }

  .collapse td.large-5.first,
  .collapse th.large-5.first,
  .collapse td.large-5.last,
  .collapse th.large-5.last {
    width: 249.66667px; }

  td.large-5 center,
  th.large-5 center {
    min-width: 193.66667px; }

  .body .columns td.large-5,
  .body .column td.large-5,
  .body .columns th.large-5,
  .body .column th.large-5 {
    width: 41.66667%; }

  td.large-6,
  th.large-6 {
    width: 274px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-6.first,
  th.large-6.first {
    padding-left: 16px; }

  td.large-6.last,
  th.large-6.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-6,
  .collapse > tbody > tr > th.large-6 {
    padding-right: 0;
    padding-left: 0;
    width: 290px; }

  .collapse td.large-6.first,
  .collapse th.large-6.first,
  .collapse td.large-6.last,
  .collapse th.large-6.last {
    width: 298px; }

  td.large-6 center,
  th.large-6 center {
    min-width: 242px; }

  .body .columns td.large-6,
  .body .column td.large-6,
  .body .columns th.large-6,
  .body .column th.large-6 {
    width: 50%; }

  td.large-7,
  th.large-7 {
    width: 322.33333px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-7.first,
  th.large-7.first {
    padding-left: 16px; }

  td.large-7.last,
  th.large-7.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-7,
  .collapse > tbody > tr > th.large-7 {
    padding-right: 0;
    padding-left: 0;
    width: 338.33333px; }

  .collapse td.large-7.first,
  .collapse th.large-7.first,
  .collapse td.large-7.last,
  .collapse th.large-7.last {
    width: 346.33333px; }

  td.large-7 center,
  th.large-7 center {
    min-width: 290.33333px; }

  .body .columns td.large-7,
  .body .column td.large-7,
  .body .columns th.large-7,
  .body .column th.large-7 {
    width: 58.33333%; }

  td.large-8,
  th.large-8 {
    width: 370.66667px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-8.first,
  th.large-8.first {
    padding-left: 16px; }

  td.large-8.last,
  th.large-8.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-8,
  .collapse > tbody > tr > th.large-8 {
    padding-right: 0;
    padding-left: 0;
    width: 386.66667px; }

  .collapse td.large-8.first,
  .collapse th.large-8.first,
  .collapse td.large-8.last,
  .collapse th.large-8.last {
    width: 394.66667px; }

  td.large-8 center,
  th.large-8 center {
    min-width: 338.66667px; }

  .body .columns td.large-8,
  .body .column td.large-8,
  .body .columns th.large-8,
  .body .column th.large-8 {
    width: 66.66667%; }

  td.large-9,
  th.large-9 {
    width: 419px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-9.first,
  th.large-9.first {
    padding-left: 16px; }

  td.large-9.last,
  th.large-9.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-9,
  .collapse > tbody > tr > th.large-9 {
    padding-right: 0;
    padding-left: 0;
    width: 435px; }

  .collapse td.large-9.first,
  .collapse th.large-9.first,
  .collapse td.large-9.last,
  .collapse th.large-9.last {
    width: 443px; }

  td.large-9 center,
  th.large-9 center {
    min-width: 387px; }

  .body .columns td.large-9,
  .body .column td.large-9,
  .body .columns th.large-9,
  .body .column th.large-9 {
    width: 75%; }

  td.large-10,
  th.large-10 {
    width: 467.33333px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-10.first,
  th.large-10.first {
    padding-left: 16px; }

  td.large-10.last,
  th.large-10.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-10,
  .collapse > tbody > tr > th.large-10 {
    padding-right: 0;
    padding-left: 0;
    width: 483.33333px; }

  .collapse td.large-10.first,
  .collapse th.large-10.first,
  .collapse td.large-10.last,
  .collapse th.large-10.last {
    width: 491.33333px; }

  td.large-10 center,
  th.large-10 center {
    min-width: 435.33333px; }

  .body .columns td.large-10,
  .body .column td.large-10,
  .body .columns th.large-10,
  .body .column th.large-10 {
    width: 83.33333%; }

  td.large-11,
  th.large-11 {
    width: 515.66667px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-11.first,
  th.large-11.first {
    padding-left: 16px; }

  td.large-11.last,
  th.large-11.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-11,
  .collapse > tbody > tr > th.large-11 {
    padding-right: 0;
    padding-left: 0;
    width: 531.66667px; }

  .collapse td.large-11.first,
  .collapse th.large-11.first,
  .collapse td.large-11.last,
  .collapse th.large-11.last {
    width: 539.66667px; }

  td.large-11 center,
  th.large-11 center {
    min-width: 483.66667px; }

  .body .columns td.large-11,
  .body .column td.large-11,
  .body .columns th.large-11,
  .body .column th.large-11 {
    width: 91.66667%; }

  td.large-12,
  th.large-12 {
    width: 564px;
    padding-left: 8px;
    padding-right: 8px; }

  td.large-12.first,
  th.large-12.first {
    padding-left: 16px; }

  td.large-12.last,
  th.large-12.last {
    padding-right: 16px; }

  .collapse > tbody > tr > td.large-12,
  .collapse > tbody > tr > th.large-12 {
    padding-right: 0;
    padding-left: 0;
    width: 580px; }

  .collapse td.large-12.first,
  .collapse th.large-12.first,
  .collapse td.large-12.last,
  .collapse th.large-12.last {
    width: 588px; }

  td.large-12 center,
  th.large-12 center {
    min-width: 532px; }

  .body .columns td.large-12,
  .body .column td.large-12,
  .body .columns th.large-12,
  .body .column th.large-12 {
    width: 100%; }

  td.large-offset-1,
  td.large-offset-1.first,
  td.large-offset-1.last,
  th.large-offset-1,
  th.large-offset-1.first,
  th.large-offset-1.last {
    padding-left: 64.33333px; }

  td.large-offset-2,
  td.large-offset-2.first,
  td.large-offset-2.last,
  th.large-offset-2,
  th.large-offset-2.first,
  th.large-offset-2.last {
    padding-left: 112.66667px; }

  td.large-offset-3,
  td.large-offset-3.first,
  td.large-offset-3.last,
  th.large-offset-3,
  th.large-offset-3.first,
  th.large-offset-3.last {
    padding-left: 161px; }

  td.large-offset-4,
  td.large-offset-4.first,
  td.large-offset-4.last,
  th.large-offset-4,
  th.large-offset-4.first,
  th.large-offset-4.last {
    padding-left: 209.33333px; }

  td.large-offset-5,
  td.large-offset-5.first,
  td.large-offset-5.last,
  th.large-offset-5,
  th.large-offset-5.first,
  th.large-offset-5.last {
    padding-left: 257.66667px; }

  td.large-offset-6,
  td.large-offset-6.first,
  td.large-offset-6.last,
  th.large-offset-6,
  th.large-offset-6.first,
  th.large-offset-6.last {
    padding-left: 306px; }

  td.large-offset-7,
  td.large-offset-7.first,
  td.large-offset-7.last,
  th.large-offset-7,
  th.large-offset-7.first,
  th.large-offset-7.last {
    padding-left: 354.33333px; }

  td.large-offset-8,
  td.large-offset-8.first,
  td.large-offset-8.last,
  th.large-offset-8,
  th.large-offset-8.first,
  th.large-offset-8.last {
    padding-left: 402.66667px; }

  td.large-offset-9,
  td.large-offset-9.first,
  td.large-offset-9.last,
  th.large-offset-9,
  th.large-offset-9.first,
  th.large-offset-9.last {
    padding-left: 451px; }

  td.large-offset-10,
  td.large-offset-10.first,
  td.large-offset-10.last,
  th.large-offset-10,
  th.large-offset-10.first,
  th.large-offset-10.last {
    padding-left: 499.33333px; }

  td.large-offset-11,
  td.large-offset-11.first,
  td.large-offset-11.last,
  th.large-offset-11,
  th.large-offset-11.first,
  th.large-offset-11.last {
    padding-left: 547.66667px; }

  td.expander,
  th.expander {
    visibility: hidden;
    width: 0;
    padding: 0 !important; }

  table.container.radius {
    border-radius: 0;
    border-collapse: separate; }

  .block-grid {
    width: 100%;
    max-width: 580px; }
    .block-grid td {
      display: inline-block;
      padding: 8px; }

  .up-2 td {
    width: 274px !important; }

  .up-3 td {
    width: 177px !important; }

  .up-4 td {
    width: 129px !important; }

  .up-5 td {
    width: 100px !important; }

  .up-6 td {
    width: 80px !important; }

  .up-7 td {
    width: 66px !important; }

  .up-8 td {
    width: 56px !important; }

  table.text-center,
  th.text-center,
  td.text-center,
  h1.text-center,
  h2.text-center,
  h3.text-center,
  h4.text-center,
  h5.text-center,
  h6.text-center,
  p.text-center,
  span.text-center {
    text-align: center; }

  table.text-left,
  th.text-left,
  td.text-left,
  h1.text-left,
  h2.text-left,
  h3.text-left,
  h4.text-left,
  h5.text-left,
  h6.text-left,
  p.text-left,
  span.text-left {
    text-align: left; }

  table.text-right,
  th.text-right,
  td.text-right,
  h1.text-right,
  h2.text-right,
  h3.text-right,
  h4.text-right,
  h5.text-right,
  h6.text-right,
  p.text-right,
  span.text-right {
    text-align: right; }

  span.text-center {
    display: block;
    width: 100%;
    text-align: center; }

  @media only screen and (max-width: 596px) {
    .small-float-center {
      margin: 0 auto !important;
      float: none !important;
      text-align: center !important; }
    .small-text-center {
      text-align: center !important; }
    .small-text-left {
      text-align: left !important; }
    .small-text-right {
      text-align: right !important; } }

  img.float-left {
    float: left;
    text-align: left; }

  img.float-right {
    float: right;
    text-align: right; }

  img.float-center,
  img.text-center {
    margin: 0 auto;
    Margin: 0 auto;
    float: none;
    text-align: center; }

  table.float-center,
  td.float-center,
  th.float-center {
    margin: 0 auto;
    Margin: 0 auto;
    float: none;
    text-align: center; }

  .hide-for-large {
    display: none !important;
    mso-hide: all;
    overflow: hidden;
    max-height: 0;
    font-size: 0;
    width: 0;
    line-height: 0; }
    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important; } }

  table.body table.container .hide-for-large * {
    mso-hide: all; }

  @media only screen and (max-width: 596px) {
    table.body table.container .hide-for-large,
    table.body table.container .row.hide-for-large {
      display: table !important;
      width: 100% !important; } }

  @media only screen and (max-width: 596px) {
    table.body table.container .callout-inner.hide-for-large {
      display: table-cell !important;
      width: 100% !important; } }

  @media only screen and (max-width: 596px) {
    table.body table.container .show-for-large {
      display: none !important;
      width: 0;
      mso-hide: all;
      overflow: hidden; } }

  body,
  table.body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  td,
  th,
  a {
    color: #0a0a0a;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: normal;
    padding: 0;
    margin: 0;
    Margin: 0;
    text-align: left;
    line-height: 1.3; }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: inherit;
    word-wrap: normal;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: normal;
    margin-bottom: 10px;
    Margin-bottom: 10px; }

  h1 {
    font-size: 34px; }

  h2 {
    font-size: 30px; }

  h3 {
    font-size: 28px; }

  h4 {
    font-size: 24px; }

  h5 {
    font-size: 20px; }

  h6 {
    font-size: 18px; }

  body,
  table.body,
  p,
  td,
  th {
    font-size: 16px;
    line-height: 1.3; }

  p {
    margin-bottom: 10px;
    Margin-bottom: 10px; }
    p.lead {
      font-size: 20px;
      line-height: 1.6; }
    p.subheader {
      margin-top: 4px;
      margin-bottom: 8px;
      Margin-top: 4px;
      Margin-bottom: 8px;
      font-weight: normal;
      line-height: 1.4;
      color: #8a8a8a; }

  small {
    font-size: 80%;
    color: #cacaca; }

  a {
    color: #2199e8;
    text-decoration: none; }
    a:hover {
      color: #147dc2; }
    a:active {
      color: #147dc2; }
    a:visited {
      color: #2199e8; }

  h1 a,
  h1 a:visited,
  h2 a,
  h2 a:visited,
  h3 a,
  h3 a:visited,
  h4 a,
  h4 a:visited,
  h5 a,
  h5 a:visited,
  h6 a,
  h6 a:visited {
    color: #2199e8; }

  pre {
    background: #f3f3f3;
    margin: 30px 0;
    Margin: 30px 0; }
    pre code {
      color: #cacaca; }
      pre code span.callout {
        color: #8a8a8a;
        font-weight: bold; }
      pre code span.callout-strong {
        color: #ff6908;
        font-weight: bold; }

  table.hr {
    width: 100%; }
    table.hr th {
      height: 0;
      max-width: 580px;
      border-top: 0;
      border-right: 0;
      border-bottom: 1px solid #0a0a0a;
      border-left: 0;
      margin: 20px auto;
      Margin: 20px auto;
      clear: both; }

  .stat {
    font-size: 40px;
    line-height: 1; }
    p + .stat {
      margin-top: -16px;
      Margin-top: -16px; }

  span.preheader {
    display: none !important;
    visibility: hidden;
    mso-hide: all !important;
    font-size: 1px;
    color: #f3f3f3;
    line-height: 1px;
    max-height: 0px;
    max-width: 0px;
    opacity: 0;
    overflow: hidden; }

  table.button {
    width: auto;
    margin: 0 0 16px 0;
    Margin: 0 0 16px 0; }
    table.button table td {
      text-align: left;
      color: #fefefe;
      background: #2199e8;
      border: 2px solid #2199e8; }
      table.button table td a {
        font-family: Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: bold;
        color: #fefefe;
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px 8px 16px;
        border: 0 solid #2199e8;
        border-radius: 3px; }
    table.button.radius table td {
      border-radius: 3px;
      border: none; }
    table.button.rounded table td {
      border-radius: 500px;
      border: none; }

  table.button:hover table tr td a,
  table.button:active table tr td a,
  table.button table tr td a:visited,
  table.button.tiny:hover table tr td a,
  table.button.tiny:active table tr td a,
  table.button.tiny table tr td a:visited,
  table.button.small:hover table tr td a,
  table.button.small:active table tr td a,
  table.button.small table tr td a:visited,
  table.button.large:hover table tr td a,
  table.button.large:active table tr td a,
  table.button.large table tr td a:visited {
    color: #fefefe; }

  table.button.tiny table td,
  table.button.tiny table a {
    padding: 4px 8px 4px 8px; }

  table.button.tiny table a {
    font-size: 10px;
    font-weight: normal; }

  table.button.small table td,
  table.button.small table a {
    padding: 5px 10px 5px 10px;
    font-size: 12px; }

  table.button.large table a {
    padding: 10px 20px 10px 20px;
    font-size: 20px; }

  table.button.expand,
  table.button.expanded {
    width: 100% !important; }
    table.button.expand table,
    table.button.expanded table {
      width: 100%; }
      table.button.expand table a,
      table.button.expanded table a {
        text-align: center;
        width: 100%;
        padding-left: 0;
        padding-right: 0; }
    table.button.expand center,
    table.button.expanded center {
      min-width: 0; }

  table.button:hover table td,
  table.button:visited table td,
  table.button:active table td {
    background: #147dc2;
    color: #fefefe; }

  table.button:hover table a,
  table.button:visited table a,
  table.button:active table a {
    border: 0 solid #147dc2; }

  table.button.secondary table td {
    background: #777777;
    color: #fefefe;
    border: 0px solid #777777; }

  table.button.secondary table a {
    color: #fefefe;
    border: 0 solid #777777; }

  table.button.secondary:hover table td {
    background: #919191;
    color: #fefefe; }

  table.button.secondary:hover table a {
    border: 0 solid #919191; }

  table.button.secondary:hover table td a {
    color: #fefefe; }

  table.button.secondary:active table td a {
    color: #fefefe; }

  table.button.secondary table td a:visited {
    color: #fefefe; }

  table.button.success table td {
    background: #3adb76;
    border: 0px solid #3adb76; }

  table.button.success table a {
    border: 0 solid #3adb76; }

  table.button.success:hover table td {
    background: #23bf5d; }

  table.button.success:hover table a {
    border: 0 solid #23bf5d; }

  table.button.alert table td {
    background: #ec5840;
    border: 0px solid #ec5840; }

  table.button.alert table a {
    border: 0 solid #ec5840; }

  table.button.alert:hover table td {
    background: #e23317; }

  table.button.alert:hover table a {
    border: 0 solid #e23317; }

  table.button.warning table td {
    background: #ffae00;
    border: 0px solid #ffae00; }

  table.button.warning table a {
    border: 0px solid #ffae00; }

  table.button.warning:hover table td {
    background: #cc8b00; }

  table.button.warning:hover table a {
    border: 0px solid #cc8b00; }

  table.callout {
    margin-bottom: 16px;
    Margin-bottom: 16px; }

  th.callout-inner {
    width: 100%;
    border: 1px solid #cbcbcb;
    padding: 10px;
    background: #fefefe; }
    th.callout-inner.primary {
      background: #def0fc;
      border: 1px solid #444444;
      color: #0a0a0a; }
    th.callout-inner.secondary {
      background: #ebebeb;
      border: 1px solid #444444;
      color: #0a0a0a; }
    th.callout-inner.success {
      background: #e1faea;
      border: 1px solid #1b9448;
      color: #fefefe; }
    th.callout-inner.warning {
      background: #fff3d9;
      border: 1px solid #996800;
      color: #fefefe; }
    th.callout-inner.alert {
      background: #fce6e2;
      border: 1px solid #b42912;
      color: #fefefe; }

  .thumbnail {
    border: solid 4px #fefefe;
    box-shadow: 0 0 0 1px rgba(10, 10, 10, 0.2);
    display: inline-block;
    line-height: 0;
    max-width: 100%;
    transition: box-shadow 200ms ease-out;
    border-radius: 3px;
    margin-bottom: 16px; }
    .thumbnail:hover, .thumbnail:focus {
      box-shadow: 0 0 6px 1px rgba(33, 153, 232, 0.5); }

  table.menu {
    width: 580px; }
    table.menu td.menu-item,
    table.menu th.menu-item {
      padding: 10px;
      padding-right: 10px; }
      table.menu td.menu-item a,
      table.menu th.menu-item a {
        color: #2199e8; }

  table.menu.vertical td.menu-item,
  table.menu.vertical th.menu-item {
    padding: 10px;
    padding-right: 0;
    display: block; }
    table.menu.vertical td.menu-item a,
    table.menu.vertical th.menu-item a {
      width: 100%; }

  table.menu.vertical td.menu-item table.menu.vertical td.menu-item,
  table.menu.vertical td.menu-item table.menu.vertical th.menu-item,
  table.menu.vertical th.menu-item table.menu.vertical td.menu-item,
  table.menu.vertical th.menu-item table.menu.vertical th.menu-item {
    padding-left: 10px; }

  table.menu.text-center a {
    text-align: center; }

  .menu[align="center"] {
    width: auto !important; }

  body.outlook p {
    display: inline !important; }

  @media only screen and (max-width: 596px) {
    table.body img {
      width: auto;
      height: auto; }
    table.body center {
      min-width: 0 !important; }
    table.body .container {
      width: 95% !important; }
    table.body .columns,
    table.body .column {
      height: auto !important;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      padding-left: 16px !important;
      padding-right: 16px !important; }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important; }
    table.body .collapse .columns,
    table.body .collapse .column {
      padding-left: 0 !important;
      padding-right: 0 !important; }
    td.small-1,
    th.small-1 {
      display: inline-block !important;
      width: 8.33333% !important; }
    td.small-2,
    th.small-2 {
      display: inline-block !important;
      width: 16.66667% !important; }
    td.small-3,
    th.small-3 {
      display: inline-block !important;
      width: 25% !important; }
    td.small-4,
    th.small-4 {
      display: inline-block !important;
      width: 33.33333% !important; }
    td.small-5,
    th.small-5 {
      display: inline-block !important;
      width: 41.66667% !important; }
    td.small-6,
    th.small-6 {
      display: inline-block !important;
      width: 50% !important; }
    td.small-7,
    th.small-7 {
      display: inline-block !important;
      width: 58.33333% !important; }
    td.small-8,
    th.small-8 {
      display: inline-block !important;
      width: 66.66667% !important; }
    td.small-9,
    th.small-9 {
      display: inline-block !important;
      width: 75% !important; }
    td.small-10,
    th.small-10 {
      display: inline-block !important;
      width: 83.33333% !important; }
    td.small-11,
    th.small-11 {
      display: inline-block !important;
      width: 91.66667% !important; }
    td.small-12,
    th.small-12 {
      display: inline-block !important;
      width: 100% !important; }
    .columns td.small-12,
    .column td.small-12,
    .columns th.small-12,
    .column th.small-12 {
      display: block !important;
      width: 100% !important; }
    table.body td.small-offset-1,
    table.body th.small-offset-1 {
      margin-left: 8.33333% !important;
      Margin-left: 8.33333% !important; }
    table.body td.small-offset-2,
    table.body th.small-offset-2 {
      margin-left: 16.66667% !important;
      Margin-left: 16.66667% !important; }
    table.body td.small-offset-3,
    table.body th.small-offset-3 {
      margin-left: 25% !important;
      Margin-left: 25% !important; }
    table.body td.small-offset-4,
    table.body th.small-offset-4 {
      margin-left: 33.33333% !important;
      Margin-left: 33.33333% !important; }
    table.body td.small-offset-5,
    table.body th.small-offset-5 {
      margin-left: 41.66667% !important;
      Margin-left: 41.66667% !important; }
    table.body td.small-offset-6,
    table.body th.small-offset-6 {
      margin-left: 50% !important;
      Margin-left: 50% !important; }
    table.body td.small-offset-7,
    table.body th.small-offset-7 {
      margin-left: 58.33333% !important;
      Margin-left: 58.33333% !important; }
    table.body td.small-offset-8,
    table.body th.small-offset-8 {
      margin-left: 66.66667% !important;
      Margin-left: 66.66667% !important; }
    table.body td.small-offset-9,
    table.body th.small-offset-9 {
      margin-left: 75% !important;
      Margin-left: 75% !important; }
    table.body td.small-offset-10,
    table.body th.small-offset-10 {
      margin-left: 83.33333% !important;
      Margin-left: 83.33333% !important; }
    table.body td.small-offset-11,
    table.body th.small-offset-11 {
      margin-left: 91.66667% !important;
      Margin-left: 91.66667% !important; }
    table.body table.columns td.expander,
    table.body table.columns th.expander {
      display: none !important; }
    table.body .right-text-pad,
    table.body .text-pad-right {
      padding-left: 10px !important; }
    table.body .left-text-pad,
    table.body .text-pad-left {
      padding-right: 10px !important; }
    table.menu {
      width: 100% !important; }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important; }
      table.menu.vertical td,
      table.menu.vertical th, table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important; }
    table.menu[align="center"] {
      width: auto !important; }
    table.button.small-expand,
    table.button.small-expanded {
      width: 100% !important; }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%; }
        table.button.small-expand table a,
        table.button.small-expanded table a {
          text-align: center !important;
          width: 100% !important;
          padding-left: 0 !important;
          padding-right: 0 !important; }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0; } }

  body,
  html,
  .body {
    background: #f3f3f3 !important; }

  .container.header {
    background: #f3f3f3; }

  .body-drip {
    border-top: 8px solid #663399; }

  .header {
    background: #8a8a8a; }

  .header .columns {
    padding-bottom: 0; }

  .header p {
    color: #fff;
    padding-top: 15px; }

  .header .wrapper-inner {
    padding: 20px; }

  .header .container {
    background: transparent; }

  table.button.facebook table td {
    background: #3B5998 !important;
    border-color: #3B5998; }

  table.button.twitter table td {
    background: #1daced !important;
    border-color: #1daced; }

  table.button.google table td {
    background: #DB4A39 !important;
    border-color: #DB4A39; }

  .wrapper.secondary {
    background: #f3f3f3; }

  /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmNzcyIsInNvdXJjZXMiOlsiYXBwLnNjc3MiLCJfc2V0dGluZ3Muc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2ZvdW5kYXRpb24tZW1haWxzLnNjc3MiLCIuLi8uLi8uLi9ub2RlX21vZHVsZXMvZm91bmRhdGlvbi1lbWFpbHMvc2Nzcy91dGlsL191dGlsLnNjc3MiLCIuLi8uLi8uLi9ub2RlX21vZHVsZXMvZm91bmRhdGlvbi1lbWFpbHMvc2Nzcy9fZ2xvYmFsLnNjc3MiLCIuLi8uLi8uLi9ub2RlX21vZHVsZXMvZm91bmRhdGlvbi1lbWFpbHMvc2Nzcy9jb21wb25lbnRzL19ub3JtYWxpemUuc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2dyaWQvX2dyaWQuc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2dyaWQvX2Jsb2NrLWdyaWQuc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2NvbXBvbmVudHMvX2FsaWdubWVudC5zY3NzIiwiLi4vLi4vLi4vbm9kZV9tb2R1bGVzL2ZvdW5kYXRpb24tZW1haWxzL3Njc3MvY29tcG9uZW50cy9fdmlzaWJpbGl0eS5zY3NzIiwiLi4vLi4vLi4vbm9kZV9tb2R1bGVzL2ZvdW5kYXRpb24tZW1haWxzL3Njc3MvY29tcG9uZW50cy9fdHlwb2dyYXBoeS5zY3NzIiwiLi4vLi4vLi4vbm9kZV9tb2R1bGVzL2ZvdW5kYXRpb24tZW1haWxzL3Njc3MvY29tcG9uZW50cy9fYnV0dG9uLnNjc3MiLCIuLi8uLi8uLi9ub2RlX21vZHVsZXMvZm91bmRhdGlvbi1lbWFpbHMvc2Nzcy9jb21wb25lbnRzL19jYWxsb3V0LnNjc3MiLCIuLi8uLi8uLi9ub2RlX21vZHVsZXMvZm91bmRhdGlvbi1lbWFpbHMvc2Nzcy9jb21wb25lbnRzL190aHVtYm5haWwuc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2NvbXBvbmVudHMvX21lbnUuc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2NvbXBvbmVudHMvX291dGxvb2stZmlyc3Quc2NzcyIsIi4uLy4uLy4uL25vZGVfbW9kdWxlcy9mb3VuZGF0aW9uLWVtYWlscy9zY3NzL2NvbXBvbmVudHMvX21lZGlhLXF1ZXJ5LnNjc3MiLCJ0ZW1wbGF0ZS9fdGVtcGxhdGUuc2NzcyJdLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICdzZXR0aW5ncyc7XG5AaW1wb3J0ICdmb3VuZGF0aW9uLWVtYWlscyc7XG5cbkBpbXBvcnQgJ3RlbXBsYXRlL3RlbXBsYXRlJzsiLCIvLyAgRm91bmRhdGlvbiBmb3IgRW1haWxzIFNldHRpbmdzXG4vLyAgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4vL1xuLy8gIFRhYmxlIG9mIENvbnRlbnRzOlxuLy9cbi8vICAgMS4gR2xvYmFsXG4vLyAgIDIuIEdyaWRcbi8vICAgMy4gQmxvY2sgR3JpZFxuLy8gICA0LiBUeXBvZ3JhcGh5XG4vLyAgIDUuIEJ1dHRvblxuLy8gICA2LiBDYWxsb3V0XG4vLyAgIDcuIE1lbnVcbi8vICAgOC4gVGh1bWJuYWlsXG5cblxuLy8gMS4gR2xvYmFsXG4vLyAtLS0tLS0tLS1cblxuJHByaW1hcnktY29sb3I6ICMyMTk5ZTg7XG4kc2Vjb25kYXJ5LWNvbG9yOiAjNzc3Nzc3O1xuJHN1Y2Nlc3MtY29sb3I6ICMzYWRiNzY7XG4kd2FybmluZy1jb2xvcjogI2ZmYWUwMDtcbiRhbGVydC1jb2xvcjogI2VjNTg0MDtcbiRsaWdodC1ncmF5OiAjZjNmM2YzO1xuJG1lZGl1bS1ncmF5OiAjY2FjYWNhO1xuJGRhcmstZ3JheTogIzhhOGE4YTtcbiRibGFjazogIzBhMGEwYTtcbiR3aGl0ZTogI2ZlZmVmZTtcbiRwcmUtY29sb3I6ICNmZjY5MDg7XG4kZ2xvYmFsLXdpZHRoOiA1ODBweDtcbiRnbG9iYWwtd2lkdGgtc21hbGw6IDk1JTtcbiRnbG9iYWwtZ3V0dGVyOiAxNnB4O1xuJGJvZHktYmFja2dyb3VuZDogJGxpZ2h0LWdyYXk7XG4kY29udGFpbmVyLWJhY2tncm91bmQ6ICR3aGl0ZTtcbiRnbG9iYWwtcGFkZGluZzogMTZweDtcbiRnbG9iYWwtbWFyZ2luOiAxNnB4O1xuJGdsb2JhbC1yYWRpdXM6IDNweDtcbiRnbG9iYWwtcm91bmRlZDogNTAwcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQ6ICRnbG9iYWwtd2lkdGggKyAkZ2xvYmFsLWd1dHRlcjtcblxuLy8gMi4gR3JpZFxuLy8gLS0tLS0tLVxuXG4kZ3JpZC1jb2x1bW4tY291bnQ6IDEyO1xuJGNvbHVtbi1wYWRkaW5nLWJvdHRvbTogJGdsb2JhbC1wYWRkaW5nO1xuJGNvbnRhaW5lci1yYWRpdXM6IDA7XG5cbi8vIDMuIEJsb2NrIEdyaWRcbi8vIC0tLS0tLS0tLS0tLS1cblxuJGJsb2NrLWdyaWQtbWF4OiA4O1xuJGJsb2NrLWdyaWQtZ3V0dGVyOiAkZ2xvYmFsLWd1dHRlcjtcblxuLy8gNC4gVHlwb2dyYXBoeVxuLy8gLS0tLS0tLS0tLS0tLVxuXG4kZ2xvYmFsLWZvbnQtY29sb3I6ICRibGFjaztcbiRib2R5LWZvbnQtZmFtaWx5OiBIZWx2ZXRpY2EsIEFyaWFsLCBzYW5zLXNlcmlmO1xuJGdsb2JhbC1mb250LXdlaWdodDogbm9ybWFsO1xuJGhlYWRlci1jb2xvcjogaW5oZXJpdDtcbiRnbG9iYWwtbGluZS1oZWlnaHQ6IDEuMztcbiRnbG9iYWwtZm9udC1zaXplOiAxNnB4O1xuJGJvZHktbGluZS1oZWlnaHQ6ICRnbG9iYWwtbGluZS1oZWlnaHQ7XG4kaGVhZGVyLWZvbnQtZmFtaWx5OiAkYm9keS1mb250LWZhbWlseTtcbiRoZWFkZXItZm9udC13ZWlnaHQ6ICRnbG9iYWwtZm9udC13ZWlnaHQ7XG4kaDEtZm9udC1zaXplOiAzNHB4O1xuJGgyLWZvbnQtc2l6ZTogMzBweDtcbiRoMy1mb250LXNpemU6IDI4cHg7XG4kaDQtZm9udC1zaXplOiAyNHB4O1xuJGg1LWZvbnQtc2l6ZTogMjBweDtcbiRoNi1mb250LXNpemU6IDE4cHg7XG4kaGVhZGVyLW1hcmdpbi1ib3R0b206IDEwcHg7XG4kcGFyYWdyYXBoLW1hcmdpbi1ib3R0b206IDEwcHg7XG4kc21hbGwtZm9udC1zaXplOiA4MCU7XG4kc21hbGwtZm9udC1jb2xvcjogJG1lZGl1bS1ncmF5O1xuJGxlYWQtZm9udC1zaXplOiAkZ2xvYmFsLWZvbnQtc2l6ZSAqIDEuMjU7XG4kbGVhZC1saW5lLWhlaWdodDogMS42O1xuJHRleHQtcGFkZGluZzogMTBweDtcbiRzdWJoZWFkZXItbGluZWhlaWdodDogMS40O1xuJHN1YmhlYWRlci1jb2xvcjogJGRhcmstZ3JheTtcbiRzdWJoZWFkZXItZm9udC13ZWlnaHQ6ICRnbG9iYWwtZm9udC13ZWlnaHQ7XG4kc3ViaGVhZGVyLW1hcmdpbi10b3A6IDRweDtcbiRzdWJoZWFkZXItbWFyZ2luLWJvdHRvbTogOHB4O1xuJGhyLXdpZHRoOiAkZ2xvYmFsLXdpZHRoO1xuJGhyLWJvcmRlcjogMXB4IHNvbGlkICRibGFjaztcbiRoci1tYXJnaW46IDIwcHggYXV0bztcbiRhbmNob3ItdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuJGFuY2hvci1jb2xvcjogJHByaW1hcnktY29sb3I7XG4kYW5jaG9yLWNvbG9yLXZpc2l0ZWQ6ICRhbmNob3ItY29sb3I7XG4kYW5jaG9yLWNvbG9yLWhvdmVyOiBkYXJrZW4oJHByaW1hcnktY29sb3IsIDEwJSk7XG4kYW5jaG9yLWNvbG9yLWFjdGl2ZTogJGFuY2hvci1jb2xvci1ob3ZlcjtcbiRzdGF0LWZvbnQtc2l6ZTogNDBweDtcblxuLy8gNS4gQnV0dG9uXG4vLyAtLS0tLS0tLS1cblxuJGJ1dHRvbi1wYWRkaW5nOiAoXG4gIHRpbnk6IDRweCA4cHggNHB4IDhweCxcbiAgc21hbGw6IDVweCAxMHB4IDVweCAxMHB4LFxuICBkZWZhdWx0OiA4cHggMTZweCA4cHggMTZweCxcbiAgbGFyZ2U6IDEwcHggMjBweCAxMHB4IDIwcHgsXG4pO1xuJGJ1dHRvbi1mb250LXNpemU6IChcbiAgdGlueTogMTBweCxcbiAgc21hbGw6IDEycHgsXG4gIGRlZmF1bHQ6IDE2cHgsXG4gIGxhcmdlOiAyMHB4LFxuKTtcbiRidXR0b24tY29sb3I6ICR3aGl0ZTtcbiRidXR0b24tY29sb3ItYWx0OiAkbWVkaXVtLWdyYXk7XG4kYnV0dG9uLWZvbnQtd2VpZ2h0OiBib2xkO1xuJGJ1dHRvbi1tYXJnaW46IDAgMCAkZ2xvYmFsLW1hcmdpbiAwO1xuJGJ1dHRvbi1iYWNrZ3JvdW5kOiAkcHJpbWFyeS1jb2xvcjtcbiRidXR0b24tYm9yZGVyOiAycHggc29saWQgJGJ1dHRvbi1iYWNrZ3JvdW5kO1xuJGJ1dHRvbi1yYWRpdXM6ICRnbG9iYWwtcmFkaXVzO1xuJGJ1dHRvbi1yb3VuZGVkOiAkZ2xvYmFsLXJvdW5kZWQ7XG5cbi8vIDYuIENhbGxvdXRcbi8vIC0tLS0tLS0tLS1cblxuJGNhbGxvdXQtYmFja2dyb3VuZDogJHdoaXRlO1xuJGNhbGxvdXQtYmFja2dyb3VuZC1mYWRlOiA4NSU7XG4kY2FsbG91dC1wYWRkaW5nOiAxMHB4O1xuJGNhbGxvdXQtbWFyZ2luLWJvdHRvbTogJGdsb2JhbC1tYXJnaW47XG4kY2FsbG91dC1ib3JkZXI6IDFweCBzb2xpZCBkYXJrZW4oJGNhbGxvdXQtYmFja2dyb3VuZCwgMjAlKTtcbiRjYWxsb3V0LWJvcmRlci1zZWNvbmRhcnk6IDFweCBzb2xpZCBkYXJrZW4oJHNlY29uZGFyeS1jb2xvciwgMjAlKTtcbiRjYWxsb3V0LWJvcmRlci1zdWNjZXNzOiAxcHggc29saWQgZGFya2VuKCRzdWNjZXNzLWNvbG9yLCAyMCUpO1xuJGNhbGxvdXQtYm9yZGVyLXdhcm5pbmc6IDFweCBzb2xpZCBkYXJrZW4oJHdhcm5pbmctY29sb3IsIDIwJSk7XG4kY2FsbG91dC1ib3JkZXItYWxlcnQ6IDFweCBzb2xpZCBkYXJrZW4oJGFsZXJ0LWNvbG9yLCAyMCUpO1xuXG4vLyA3LiBNZW51XG4vLyAtLS0tLS0tXG5cbiRtZW51LWl0ZW0tcGFkZGluZzogMTBweDtcbiRtZW51LWl0ZW0tZ3V0dGVyOiAxMHB4O1xuJG1lbnUtaXRlbS1jb2xvcjogJHByaW1hcnktY29sb3I7XG5cbi8vIDguIFRodW1ibmFpbFxuLy8gLS0tLS0tLS0tLS0tXG5cbiR0aHVtYm5haWwtYm9yZGVyOiBzb2xpZCA0cHggJHdoaXRlO1xuJHRodW1ibmFpbC1tYXJnaW4tYm90dG9tOiAkZ2xvYmFsLW1hcmdpbjtcbiR0aHVtYm5haWwtc2hhZG93OiAwIDAgMCAxcHggcmdiYSgkYmxhY2ssIDAuMik7XG4kdGh1bWJuYWlsLXNoYWRvdy1ob3ZlcjogMCAwIDZweCAxcHggcmdiYSgkcHJpbWFyeS1jb2xvciwgMC41KTtcbiR0aHVtYm5haWwtdHJhbnNpdGlvbjogYm94LXNoYWRvdyAyMDBtcyBlYXNlLW91dDtcbiR0aHVtYm5haWwtcmFkaXVzOiAkZ2xvYmFsLXJhZGl1cztcblxuIiwiLy8gRm91bmRhdGlvbiBmb3IgRW1haWxzIGJ5IFpVUkJcbi8vIGZvdW5kYXRpb24uenVyYi5jb21cbi8vIExpY2Vuc2VkIHVuZGVyIE1JVCBPcGVuIFNvdXJjZVxuXG5AaW1wb3J0XG4gICd1dGlsL3V0aWwnLFxuICAnZ2xvYmFsJyxcbiAgJ2NvbXBvbmVudHMvbm9ybWFsaXplJyxcbiAgJ2dyaWQvZ3JpZCcsXG4gICdncmlkL2Jsb2NrLWdyaWQnLFxuICAnY29tcG9uZW50cy9hbGlnbm1lbnQnLFxuICAnY29tcG9uZW50cy92aXNpYmlsaXR5JyxcbiAgJ2NvbXBvbmVudHMvdHlwb2dyYXBoeScsXG4gICdjb21wb25lbnRzL2J1dHRvbicsXG4gICdjb21wb25lbnRzL2NhbGxvdXQnLFxuICAnY29tcG9uZW50cy90aHVtYm5haWwnLFxuICAnY29tcG9uZW50cy9tZW51JyxcbiAgJ2NvbXBvbmVudHMvb3V0bG9vay1maXJzdCcsXG4gICdjb21wb25lbnRzL21lZGlhLXF1ZXJ5JztcblxuXG5cblxuXG5cblxuXG4iLCIvLyBGb3VuZGF0aW9uIGZvciBFbWFpbHMgYnkgWlVSQlxuLy8gZm91bmRhdGlvbi56dXJiLmNvbVxuLy8gTGljZW5zZWQgdW5kZXIgTUlUIE9wZW4gU291cmNlXG5cbi8vLyBDYWxjdWxhdGVzIGEgcGVyY2VudGFnZSB2YWx1ZSBmb3IgYSBncmlkIGNvbHVtbiB3aWR0aC5cbi8vLyBAYWNjZXNzIHByaXZhdGVcbi8vLyBAcGFyYW0ge251bWJlcn0gJGNvbE51bWJlciAtIENvbHVtbiBjb3VudCBvZiB0aGUgY29sdW1uLlxuLy8vIEBwYXJhbSB7bnVtYmVyfSAkdG90YWxDb2x1bW5zIC0gQ29sdW1uIGNvdW50IG9mIHRoZSBlbnRpcmUgcm93LlxuLy8vIEByZXR1cm5zIHtudW1iZXJ9IEEgcGVyY2VudGFnZSB3aWR0aCB2YWx1ZS5cbkBmdW5jdGlvbiAtemYtZ3JpZC1jYWxjLXBjdCgkY29sTnVtYmVyLCAkdG90YWxDb2x1bW5zKSB7XG4gIEByZXR1cm4gZmxvb3IocGVyY2VudGFnZSgoJGNvbE51bWJlciAvICR0b3RhbENvbHVtbnMpKSAqIDEwMDAwMDApIC8gMTAwMDAwMDtcbn1cblxuLy8vIENhbGN1bGF0ZXMgYSBwaXhlbCB2YWx1ZSBmb3IgYSBncmlkIGNvbHVtbiB3aWR0aC5cbi8vLyBAYWNjZXNzIHByaXZhdGVcbi8vLyBAcGFyYW0ge251bWJlcn0gJGNvbHVtbk51bWJlciAtIENvbHVtbiBjb3VudCBvZiB0aGUgY29sdW1uLlxuLy8vIEBwYXJhbSB7bnVtYmVyfSAkdG90YWxDb2x1bW5zIC0gQ29sdW1uIGNvdW50IG9mIHRoZSBlbnRpcmUgcm93LlxuLy8vIEBwYXJhbSB7bnVtYmVyfSAkY29udGFpbmVyV2lkdGggLSBXaWR0aCBvZiB0aGUgc3Vycm91bmRpbmcgY29udGFpbmVyLCBpbiBwaXhlbHMuXG4vLy8gQHJldHVybnMge251bWJlcn0gQSBwaXhlbCB3aWR0aCB2YWx1ZS5cbkBmdW5jdGlvbiAtemYtZ3JpZC1jYWxjLXB4KCRjb2x1bW5OdW1iZXIsICR0b3RhbENvbHVtbnMsICRjb250YWluZXJXaWR0aCkge1xuICBAcmV0dXJuICgkY29udGFpbmVyV2lkdGggLyAkdG90YWxDb2x1bW5zICogJGNvbHVtbk51bWJlciAtICRnbG9iYWwtZ3V0dGVyKTtcbn1cbiIsIi8vIEZvdW5kYXRpb24gZm9yIEVtYWlscyBieSBaVVJCXG4vLyBmb3VuZGF0aW9uLnp1cmIuY29tXG4vLyBMaWNlbnNlZCB1bmRlciBNSVQgT3BlbiBTb3VyY2VcblxuLy8vL1xuLy8vIEBncm91cCBnbG9iYWxcbi8vLy9cblxuLy8vIFByaW1hcnkgY29sb3IgZm9yIGludGVyYWN0aXZlIGNvbXBvbmVudHMgbGlrZSBsaW5rcyBhbmQgYnV0dG9ucy5cbi8vLyBAdHlwZSBDb2xvclxuJHByaW1hcnktY29sb3I6ICMyMTk5ZTggIWRlZmF1bHQ7XG5cbi8vLyBTZWNvbmRhcnkgY29sb3IsIHVzZWQgd2l0aCBjb21wb25lbnRzIHRoYXQgc3VwcG9ydCB0aGUgYC5zZWNvbmRhcnlgIGNsYXNzLlxuLy8vIEB0eXBlIENvbG9yXG4kc2Vjb25kYXJ5LWNvbG9yOiAjNzc3Nzc3ICFkZWZhdWx0O1xuXG4vLy8gQ29sb3IgdG8gaW5kaWNhdGUgYSBwb3NpdGl2ZSBzdGF0dXMgb3IgYWN0aW9uLCB1c2VkIHdpdGggdGhlIGAuc3VjY2Vzc2AgY2xhc3MuXG4vLy8gQHR5cGUgQ29sb3JcbiRzdWNjZXNzLWNvbG9yOiAjM2FkYjc2ICFkZWZhdWx0O1xuXG4vLy8gQ29sb3IgdG8gaW5kaWNhdGUgYSBjYXV0aW9uIHN0YXR1cyBvciBhY3Rpb24sIHVzZWQgd2l0aCB0aGUgYC53YXJuaW5nYCBjbGFzcy5cbi8vLyBAdHlwZSBDb2xvclxuJHdhcm5pbmctY29sb3I6ICNmZmFlMDAgIWRlZmF1bHQ7XG5cbi8vLyBDb2xvciB0byBpbmRpY2F0ZSBhIG5lZ2F0aXZlIHN0YXR1cyBvciBhY3Rpb24sIHVzZWQgd2l0aCB0aGUgYC5hbGVydGAgY2xhc3MuXG4vLy8gQHR5cGUgQ29sb3JcbiRhbGVydC1jb2xvcjogI2VjNTg0MCAhZGVmYXVsdDtcblxuLy8vIENvbG9yIHVzZWQgZm9yIGxpZ2h0IGdyYXkgVUkgaXRlbXMgd2l0aGluIEZvdW5kYXRpb24uXG4vLy8gQHR5cGUgQ29sb3JcbiRsaWdodC1ncmF5OiAjZjNmM2YzICFkZWZhdWx0O1xuXG4vLy8gQ29sb3IgdXNlZCBmb3IgbWVkaXVtIGdyYXkgVUkgaXRlbXMgd2l0aGluIEZvdW5kYXRpb24uXG4vLy8gQHR5cGUgQ29sb3JcbiRtZWRpdW0tZ3JheTogI2NhY2FjYSAhZGVmYXVsdDtcblxuLy8vIENvbG9yIHVzZWQgZm9yIGRhcmsgZ3JheSBVSSBpdGVtcyB3aXRoaW4gRm91bmRhdGlvbi5cbi8vLyBAdHlwZSBDb2xvclxuJGRhcmstZ3JheTogIzhhOGE4YSAhZGVmYXVsdDtcblxuLy8vIENvbG9yIHVzZWQgZm9yIGJsYWNrIHVpIGl0ZW1zIHdpdGhpbiBGb3VuZGF0aW9uXG4vLy8gQHR5cGUgQ29sb3JcbiRibGFjazogIzBhMGEwYSAhZGVmYXVsdDtcblxuLy8vIENvbG9yIHVzZWQgZm9yIHdoaXRlIHVpIGl0ZW1zIHdpdGhpbiBGb3VuZGF0aW9uXG4vLy8gQHR5cGUgQ29sb3JcbiR3aGl0ZTogI2ZlZmVmZSAhZGVmYXVsdDtcblxuLy8vIENvbG9yIHVzZWQgY29kZS5cbi8vLyBAdHlwZSBDb2xvclxuJHByZS1jb2xvcjogI2ZmNjkwOCAhZGVmYXVsdDtcblxuLy8vIFdpZHRoIG9mIHRoZSBjb250YWluZXIuXG4vLy8gQHR5cGUgTnVtYmVyXG4kZ2xvYmFsLXdpZHRoOiA1ODBweCAhZGVmYXVsdDtcblxuLy8vIFdpZHRoIG9mIHRoZSBjb250YWluZXIgb24gc21hbGwgc2NyZWVucy5cbi8vLyBAdHlwZSBMZW5ndGhcbiRnbG9iYWwtd2lkdGgtc21hbGw6IDk1JSAhZGVmYXVsdDtcblxuLy8vIEd1dHRlciBmb3IgZ3JpZCBlbGVtZW50cy5cbi8vLyBAdHlwZSBsZW5ndGhcbiRnbG9iYWwtZ3V0dGVyOiAxNnB4ICFkZWZhdWx0O1xuXG4vLy8gQm9keSBiYWNrZ3JvdW5kIGNvbG9yLlxuLy8vIEB0eXBlIExlbmd0aFxuJGJvZHktYmFja2dyb3VuZDogJGxpZ2h0LWdyYXkgIWRlZmF1bHQ7XG5cbi8vLyBDb2xvciBmb3IgdGhlIGNvbnRhaW5lciBiYWNrZ3JvdW5kXG4vLy8gQHR5cGUgQ29sb3JcbiRjb250YWluZXItYmFja2dyb3VuZDogJHdoaXRlICFkZWZhdWx0O1xuXG4vLy8gR2xvYmFsIHBhZGRpbmcuXG4vLy8gQHR5cGUgTnVtYmVyXG4kZ2xvYmFsLXBhZGRpbmc6IDE2cHggIWRlZmF1bHQ7XG5cbi8vLyBHbG9iYWwgbWFyZ2luLiBNYXJnaW4gcmVxdWlyZXMgYSBjYXBpdGFsICdNJyB0byB3b3JraW4gT3V0bG9vay5jb21cbi8vLyBAdHlwZSBOdW1iZXJcbiRnbG9iYWwtbWFyZ2luOiAxNnB4ICFkZWZhdWx0O1xuXG4vLy8gR2xvYmFsIHJhaWR1cyBvZiByYWRpdXMtY29ybmVycy5cbi8vLyBAdHlwZSBOdW1iZXJcbiRnbG9iYWwtcmFkaXVzOiAzcHggIWRlZmF1bHQ7XG5cbi8vLyBHbG9iYWwgcm91bmRlZCByYWRpdXMgb2Ygcm91bmRlZC1jb3JuZXJzLlxuLy8vIEB0eXBlIE51bWJlclxuJGdsb2JhbC1yb3VuZGVkOiA1MDBweCAhZGVmYXVsdDtcblxuLy8vIEdsb2JhbCBtZWRpYSBxdWVyeSB0byBzd2l0Y2ggZnJvbSBkZXNrdG9wIHRvIG1vYmlsZSBzdHlsZXMuXG4vLy8gQHR5cGUgU3RyaW5nXG4kZ2xvYmFsLWJyZWFrcG9pbnQ6ICRnbG9iYWwtd2lkdGggKyAkZ2xvYmFsLWd1dHRlciAhZGVmYXVsdDtcblxuLndyYXBwZXIge1xuICB3aWR0aDogMTAwJTtcbn1cbiIsIi8vIEZvdW5kYXRpb24gZm9yIEVtYWlscyBieSBaVVJCXG4vLyB6dXJiLmNvbS9pbmsvXG4vLyBMaWNlbnNlZCB1bmRlciBNSVQgT3BlbiBTb3VyY2VcblxuLy8vL1xuLy8vIEBncm91cCBub3JtYWxpemVcbi8vLy9cblxuJHBhcmFncmFwaC1tYXJnaW4tYm90dG9tOiAxMHB4ICFkZWZhdWx0O1xuXG4jb3V0bG9vayBhIHtcbiAgcGFkZGluZzogMDtcbn1cblxuYm9keSB7XG4gIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG4gIG1pbi13aWR0aDogMTAwJTtcbiAgLXdlYmtpdC10ZXh0LXNpemUtYWRqdXN0OiAxMDAlO1xuICAtbXMtdGV4dC1zaXplLWFkanVzdDogMTAwJTtcbiAgbWFyZ2luOiAwO1xuICBNYXJnaW46IDA7XG4gIHBhZGRpbmc6IDA7XG4gIC1tb3otYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgLXdlYmtpdC1ib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xufVxuXG4uRXh0ZXJuYWxDbGFzcyB7XG4gIHdpZHRoOiAxMDAlO1xuXG4gICYsXG4gIHAsXG4gIHNwYW4sXG4gIGZvbnQsXG4gIHRkLFxuICBkaXYge1xuICAgIGxpbmUtaGVpZ2h0OiAxMDAlO1xuICB9XG59XG5cbiNiYWNrZ3JvdW5kVGFibGUge1xuICBtYXJnaW46IDA7XG4gIE1hcmdpbjogMDtcbiAgcGFkZGluZzogMDtcbiAgd2lkdGg6IDEwMCUgIWltcG9ydGFudDtcbiAgbGluZS1oZWlnaHQ6IDEwMCUgIWltcG9ydGFudDtcbn1cblxuaW1nIHtcbiAgb3V0bGluZTogbm9uZTtcbiAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAtbXMtaW50ZXJwb2xhdGlvbi1tb2RlOiBiaWN1YmljO1xuICB3aWR0aDogYXV0bztcbiAgbWF4LXdpZHRoOiAxMDAlO1xuICBjbGVhcjogYm90aDtcbiAgZGlzcGxheTogYmxvY2s7XG59XG5cbmNlbnRlciB7XG4gIHdpZHRoOiAxMDAlO1xuICBtaW4td2lkdGg6ICRnbG9iYWwtd2lkdGg7XG59XG5cbmEgaW1nIHtcbiAgYm9yZGVyOiBub25lO1xufVxuXG5wIHtcbiAgbWFyZ2luOiAwIDAgMCAkcGFyYWdyYXBoLW1hcmdpbi1ib3R0b207XG4gIE1hcmdpbjogMCAwIDAgJHBhcmFncmFwaC1tYXJnaW4tYm90dG9tO1xufVxuXG50YWJsZSB7XG4gIGJvcmRlci1zcGFjaW5nOiAwO1xuICBib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlO1xufVxuXG50ZCB7XG4gIHdvcmQtd3JhcDogYnJlYWstd29yZDtcbiAgLXdlYmtpdC1oeXBoZW5zOiBhdXRvO1xuICAtbW96LWh5cGhlbnM6IGF1dG87XG4gIGh5cGhlbnM6IGF1dG87XG4gIGJvcmRlci1jb2xsYXBzZTogY29sbGFwc2UgIWltcG9ydGFudDtcbn1cblxudGFibGUsIHRyLCB0ZCB7XG4gIHBhZGRpbmc6IDA7XG4gIHZlcnRpY2FsLWFsaWduOiB0b3A7XG4gIHRleHQtYWxpZ246IGxlZnQ7XG59XG4iLCIvLyBGb3VuZGF0aW9uIGZvciBFbWFpbHMgYnkgWlVSQlxuLy8genVyYi5jb20vaW5rL1xuLy8gTGljZW5zZWQgdW5kZXIgTUlUIE9wZW4gU291cmNlXG5cbi8vLy9cbi8vLyBAZ3JvdXAgZ3JpZFxuLy8vL1xuXG4vLy8gRGVmYXVsdCBudW1iZXIgb2YgY29sdW1ucyBmb3IgYW4gZW1haWwuXG4vLy8gQHR5cGUgTnVtYmVyXG4kZ3JpZC1jb2x1bW4tY291bnQ6IDEyICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBwYWRkaW5nIGZvciB0aGUgYm90dG9tIG9mIGEgY29sdW1uLlxuLy8vIEB0eXBlIE51bWJlclxuJGNvbHVtbi1wYWRkaW5nLWJvdHRvbTogJGdsb2JhbC1wYWRkaW5nICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBib3JkZXIgcmFkaXVzIGZvciB0aGUgY29udGFpbmVyLiBVc2UgYSBweCB2YWx1ZVxuLy8vIEB0eXBlIE51bWJlclxuJGNvbnRhaW5lci1yYWRpdXM6IDAgIWRlZmF1bHQ7XG5cbi8vRm9yIHZpZXdpbmcgZW1haWwgaW4gYnJvd3NlclxuQG1lZGlhIG9ubHkgc2NyZWVuIHtcbiAgaHRtbCB7XG4gICAgbWluLWhlaWdodDogMTAwJTtcbiAgICBiYWNrZ3JvdW5kOiAkYm9keS1iYWNrZ3JvdW5kO1xuICB9XG59XG5cbnRhYmxlIHtcbiAgJi5ib2R5IHtcbiAgICBiYWNrZ3JvdW5kOiAkYm9keS1iYWNrZ3JvdW5kO1xuICAgIGhlaWdodDogMTAwJTtcbiAgICB3aWR0aDogMTAwJTtcbiAgfVxuXG4gICYuY29udGFpbmVyIHtcbiAgICBiYWNrZ3JvdW5kOiAkY29udGFpbmVyLWJhY2tncm91bmQ7XG4gICAgd2lkdGg6ICRnbG9iYWwtd2lkdGg7XG4gICAgbWFyZ2luOiAwIGF1dG87XG4gICAgTWFyZ2luOiAwIGF1dG87XG4gICAgdGV4dC1hbGlnbjogaW5oZXJpdDtcbiAgfVxuXG4gICYucm93IHtcbiAgICBwYWRkaW5nOiAwO1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgfVxuXG4gICYuc3BhY2VyIHtcbiAgICB3aWR0aDogMTAwJTtcbiAgICB0ZCB7XG4gICAgICBtc28tbGluZS1oZWlnaHQtcnVsZTogZXhhY3RseTtcbiAgICB9XG4gIH1cbn1cblxudGFibGUuY29udGFpbmVyIHRhYmxlLnJvdyB7XG4gIGRpc3BsYXk6IHRhYmxlO1xufVxuXG50ZC5jb2x1bW5zLFxudGQuY29sdW1uLFxudGguY29sdW1ucyxcbnRoLmNvbHVtbiB7XG4gIG1hcmdpbjogMCBhdXRvO1xuICBNYXJnaW46IDAgYXV0bztcbiAgcGFkZGluZy1sZWZ0OiAkZ2xvYmFsLWd1dHRlcjtcbiAgcGFkZGluZy1ib3R0b206ICRjb2x1bW4tcGFkZGluZy1ib3R0b207XG5cbiAgLy8gUHJldmVudHMgTmVzdGVkIGNvbHVtbnMgZnJvbSBkb3VibGUgdGhlIHBhZGRpbmdcbiAgLmNvbHVtbixcbiAgLmNvbHVtbnMge1xuICAgIHBhZGRpbmctbGVmdDogMCAhaW1wb3J0YW50O1xuICAgIHBhZGRpbmctcmlnaHQ6IDAgIWltcG9ydGFudDtcblxuICAgIGNlbnRlciB7XG4gICAgICBtaW4td2lkdGg6IG5vbmUgIWltcG9ydGFudDtcbiAgICB9XG4gIH1cbn1cblxudGQuY29sdW1ucy5sYXN0LFxudGQuY29sdW1uLmxhc3QsXG50aC5jb2x1bW5zLmxhc3QsXG50aC5jb2x1bW4ubGFzdCB7XG4gIHBhZGRpbmctcmlnaHQ6ICRnbG9iYWwtZ3V0dGVyO1xufVxuXG4vL21ha2VzIHN1cmUgbmVzdGVkIHRhYmxlcyBhcmUgMTAwJSB3aWR0aFxudGQuY29sdW1ucyxcbnRkLmNvbHVtbixcbnRoLmNvbHVtbnMsXG50aC5jb2x1bW4ge1xuICB0YWJsZTpub3QoLmJ1dHRvbikge1xuICAgIHdpZHRoOiAxMDAlO1xuICB9XG59XG5cbkBmb3IgJGkgZnJvbSAxIHRocm91Z2ggJGdyaWQtY29sdW1uLWNvdW50IHtcbiAgdGQubGFyZ2UtI3skaX0sXG4gIHRoLmxhcmdlLSN7JGl9IHtcbiAgICB3aWR0aDogLXpmLWdyaWQtY2FsYy1weCgkaSwgJGdyaWQtY29sdW1uLWNvdW50LCAkZ2xvYmFsLXdpZHRoKTtcbiAgICBwYWRkaW5nLWxlZnQ6ICRnbG9iYWwtZ3V0dGVyIC8gMjtcbiAgICBwYWRkaW5nLXJpZ2h0OiAkZ2xvYmFsLWd1dHRlciAvIDI7XG4gIH1cblxuICB0ZC5sYXJnZS0jeyRpfS5maXJzdCxcbiAgdGgubGFyZ2UtI3skaX0uZmlyc3Qge1xuICAgIHBhZGRpbmctbGVmdDogJGdsb2JhbC1ndXR0ZXI7XG4gIH1cblxuICB0ZC5sYXJnZS0jeyRpfS5sYXN0LFxuICB0aC5sYXJnZS0jeyRpfS5sYXN0IHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAkZ2xvYmFsLWd1dHRlcjtcbiAgfVxuXG4gIC8vQ29sbGFwc2VkIGxvZ2ljXG4gIC5jb2xsYXBzZSB7XG4gICAgPiB0Ym9keSA+IHRyID4gdGQubGFyZ2UtI3skaX0sXG4gICAgPiB0Ym9keSA+IHRyID4gdGgubGFyZ2UtI3skaX0ge1xuICAgICAgcGFkZGluZy1yaWdodDogMDtcbiAgICAgIHBhZGRpbmctbGVmdDogMDtcbiAgICAgIHdpZHRoOiAtemYtZ3JpZC1jYWxjLXB4KCRpLCAkZ3JpZC1jb2x1bW4tY291bnQsICRnbG9iYWwtd2lkdGgpICsgJGdsb2JhbC1ndXR0ZXI7XG4gICAgfVxuXG4gICAgLy9Hb3R0YSBnaXZlIGl0IHRoYXQgZXh0cmEgbG92ZSBmb3IgdGhlIGZpcnN0IGFuZCBsYXN0IGNvbHVtbnMuXG4gICAgdGQubGFyZ2UtI3skaX0uZmlyc3QsXG4gICAgdGgubGFyZ2UtI3skaX0uZmlyc3QsXG4gICAgdGQubGFyZ2UtI3skaX0ubGFzdCxcbiAgICB0aC5sYXJnZS0jeyRpfS5sYXN0IHtcbiAgICAgIHdpZHRoOiAtemYtZ3JpZC1jYWxjLXB4KCRpLCAkZ3JpZC1jb2x1bW4tY291bnQsICRnbG9iYWwtd2lkdGgpICsgKCRnbG9iYWwtZ3V0dGVyICogMS41KTtcbiAgICB9XG4gIH1cblxuICB0ZC5sYXJnZS0jeyRpfSBjZW50ZXIsXG4gIHRoLmxhcmdlLSN7JGl9IGNlbnRlciB7XG4gICAgbWluLXdpZHRoOiAtemYtZ3JpZC1jYWxjLXB4KCRpLCAkZ3JpZC1jb2x1bW4tY291bnQsICRnbG9iYWwtd2lkdGgpIC0gKCRnbG9iYWwtZ3V0dGVyICogMik7XG4gIH1cblxuICAuYm9keSAuY29sdW1ucyB0ZC5sYXJnZS0jeyRpfSxcbiAgLmJvZHkgLmNvbHVtbiB0ZC5sYXJnZS0jeyRpfSxcbiAgLmJvZHkgLmNvbHVtbnMgdGgubGFyZ2UtI3skaX0sXG4gIC5ib2R5IC5jb2x1bW4gdGgubGFyZ2UtI3skaX0ge1xuICAgIHdpZHRoOiAtemYtZ3JpZC1jYWxjLXBjdCgkaSwgJGdyaWQtY29sdW1uLWNvdW50KTtcbiAgfVxufVxuXG5AZm9yICRpIGZyb20gMSB0aHJvdWdoICgkZ3JpZC1jb2x1bW4tY291bnQgLSAxKSB7XG4gIHRkLmxhcmdlLW9mZnNldC0jeyRpfSxcbiAgdGQubGFyZ2Utb2Zmc2V0LSN7JGl9LmZpcnN0LFxuICB0ZC5sYXJnZS1vZmZzZXQtI3skaX0ubGFzdCxcbiAgdGgubGFyZ2Utb2Zmc2V0LSN7JGl9LFxuICB0aC5sYXJnZS1vZmZzZXQtI3skaX0uZmlyc3QsXG4gIHRoLmxhcmdlLW9mZnNldC0jeyRpfS5sYXN0IHtcbiAgICAvLzEuNSB0YWtlcyBpbiBlZmZlY3QgYSB3aG9sZSBlbXB0eSBjZWxsLlxuICAgIHBhZGRpbmctbGVmdDogLXpmLWdyaWQtY2FsYy1weCgkaSwgJGdyaWQtY29sdW1uLWNvdW50LCAkZ2xvYmFsLXdpZHRoKSArICRnbG9iYWwtZ3V0dGVyICogMjtcbiAgfVxufVxuXG50ZC5leHBhbmRlcixcbnRoLmV4cGFuZGVyIHtcbiAgdmlzaWJpbGl0eTogaGlkZGVuO1xuICB3aWR0aDogMDtcbiAgcGFkZGluZzogMCAhaW1wb3J0YW50O1xufVxuXG4vLyBhZGRzIHJhZGl1cyB0byBjb250YWluZXJcbnRhYmxlLmNvbnRhaW5lci5yYWRpdXMge1xuICBib3JkZXItcmFkaXVzOiAkY29udGFpbmVyLXJhZGl1cztcbiAgYm9yZGVyLWNvbGxhcHNlOiBzZXBhcmF0ZTtcbn1cbiIsIi8vIEZvdW5kYXRpb24gZm9yIEVtYWlscyBieSBaVVJCXG4vLyB6dXJiLmNvbS9pbmsvXG4vLyBMaWNlbnNlZCB1bmRlciBNSVQgT3BlbiBTb3VyY2VcblxuLy8vL1xuLy8vIEBncm91cCBibG9jay1ncmlkXG4vLy8vXG5cbi8vLyBUaGUgaGlnaGVzdCBudW1iZXIgb2YgYC54LXVwYCBjbGFzc2VzIGF2YWlsYWJsZSB3aGVuIHVzaW5nIHRoZSBibG9jayBncmlkIENTUy5cbi8vLyBAdHlwZSBOdW1iZXJcbiRibG9jay1ncmlkLW1heDogOCAhZGVmYXVsdDtcblxuLy8vIEd1dHRlciBiZXR3ZWVuIGVsZW1lbnRzIGluIGEgYmxvY2sgZ3JpZC5cbi8vLyBAdHlwZSBOdW1iZXJcbiRibG9jay1ncmlkLWd1dHRlcjogJGdsb2JhbC1ndXR0ZXIgIWRlZmF1bHQ7XG5cbi5ibG9jay1ncmlkIHtcbiAgd2lkdGg6IDEwMCU7XG4gIG1heC13aWR0aDogJGdsb2JhbC13aWR0aDtcblxuICB0ZCB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIHBhZGRpbmc6ICRibG9jay1ncmlkLWd1dHRlciAvIDI7XG4gIH1cbn1cblxuLy8gU2l6aW5nIGNsYXNzZXNcbkBmb3IgJGkgZnJvbSAyIHRocm91Z2ggJGJsb2NrLWdyaWQtbWF4IHtcbiAgLnVwLSN7JGl9IHRkIHtcbiAgICB3aWR0aDogZmxvb3IoKCRnbG9iYWwtd2lkdGggLSAkaSAqICRibG9jay1ncmlkLWd1dHRlcikgLyAkaSkgIWltcG9ydGFudDtcbiAgfVxufVxuIiwiLy8gRm91bmRhdGlvbiBmb3IgRW1haWxzIGJ5IFpVUkJcbi8vIHp1cmIuY29tL2luay9cbi8vIExpY2Vuc2VkIHVuZGVyIE1JVCBPcGVuIFNvdXJjZVxuXG4vLy8vXG4vLy8gQGdyb3VwIGFsaWdubWVudFxuLy8vL1xuXG50YWJsZSxcbnRoLFxudGQsXG5oMSxcbmgyLFxuaDMsXG5oNCxcbmg1LFxuaDYsXG5wLFxuc3BhbiB7XG4gICYudGV4dC1jZW50ZXIge1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgfVxuXG4gICYudGV4dC1sZWZ0IHtcbiAgICB0ZXh0LWFsaWduOiBsZWZ0O1xuICB9XG5cbiAgJi50ZXh0LXJpZ2h0IHtcbiAgICB0ZXh0LWFsaWduOiByaWdodDtcbiAgfVxufVxuXG5zcGFuLnRleHQtY2VudGVyIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG59XG5cbkBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogI3skZ2xvYmFsLWJyZWFrcG9pbnR9KSB7XG4gIC5zbWFsbC1mbG9hdC1jZW50ZXIge1xuICAgIG1hcmdpbjogMCBhdXRvICFpbXBvcnRhbnQ7XG4gICAgZmxvYXQ6IG5vbmUgIWltcG9ydGFudDtcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXIgIWltcG9ydGFudDtcbiAgfVxuXG4gIC5zbWFsbC10ZXh0LWNlbnRlciB7XG4gICAgdGV4dC1hbGlnbjogY2VudGVyICFpbXBvcnRhbnQ7XG4gIH1cblxuICAuc21hbGwtdGV4dC1sZWZ0IHtcbiAgICB0ZXh0LWFsaWduOiBsZWZ0ICFpbXBvcnRhbnQ7XG4gIH1cblxuICAuc21hbGwtdGV4dC1yaWdodCB7XG4gICAgdGV4dC1hbGlnbjogcmlnaHQgIWltcG9ydGFudDtcbiAgfVxufVxuXG5pbWcuZmxvYXQtbGVmdCB7XG4gIGZsb2F0OiBsZWZ0O1xuICB0ZXh0LWFsaWduOiBsZWZ0O1xufVxuXG5pbWcuZmxvYXQtcmlnaHQge1xuICBmbG9hdDogcmlnaHQ7XG4gIHRleHQtYWxpZ246IHJpZ2h0O1xufVxuXG5pbWcuZmxvYXQtY2VudGVyLFxuaW1nLnRleHQtY2VudGVyIHtcbiAgbWFyZ2luOiAwIGF1dG87XG4gIE1hcmdpbjogMCBhdXRvO1xuICBmbG9hdDogbm9uZTtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xufVxuXG50YWJsZSxcbnRkLFxudGgge1xuICAmLmZsb2F0LWNlbnRlciB7XG4gICAgbWFyZ2luOiAwIGF1dG87XG4gICAgTWFyZ2luOiAwIGF1dG87XG4gICAgZmxvYXQ6IG5vbmU7XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICB9XG59XG5cblxuIiwiLy8gRm91bmRhdGlvbiBmb3IgRW1haWxzIGJ5IFpVUkJcbi8vIHp1cmIuY29tL2luay9cbi8vIExpY2Vuc2VkIHVuZGVyIE1JVCBPcGVuIFNvdXJjZVxuXG4vLy8vXG4vLy8gQGdyb3VwIHZpc2liaWxpdHlcbi8vLy9cblxuLmhpZGUtZm9yLWxhcmdlIHtcbiAgZGlzcGxheTogbm9uZSAhaW1wb3J0YW50O1xuICBtc28taGlkZTogYWxsOyAvLyBoaWRlIHNlbGVjdGVkIGVsZW1lbnRzIGluIE91dGxvb2sgMjAwNy0yMDEzXG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIG1heC1oZWlnaHQ6IDA7XG4gIGZvbnQtc2l6ZTogMDtcbiAgd2lkdGg6IDA7XG4gIGxpbmUtaGVpZ2h0OiAwO1xuXG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogI3skZ2xvYmFsLWJyZWFrcG9pbnR9KSB7XG4gICAgZGlzcGxheTogYmxvY2sgIWltcG9ydGFudDtcbiAgICB3aWR0aDogYXV0byAhaW1wb3J0YW50O1xuICAgIG92ZXJmbG93OiB2aXNpYmxlICFpbXBvcnRhbnQ7XG4gICAgbWF4LWhlaWdodDogbm9uZSAhaW1wb3J0YW50O1xuICAgIGZvbnQtc2l6ZTogaW5oZXJpdCAhaW1wb3J0YW50O1xuICAgIGxpbmUtaGVpZ2h0OiBpbmhlcml0ICFpbXBvcnRhbnQ7XG4gIH1cbn1cblxudGFibGUuYm9keSB0YWJsZS5jb250YWluZXIgLmhpZGUtZm9yLWxhcmdlICoge1xuICBtc28taGlkZTogYWxsOyAvLyBoaWRlIHNlbGVjdGVkIGVsZW1lbnRzIGluIE91dGxvb2sgMjAwNy0yMDEzXG59XG5cbnRhYmxlLmJvZHkgdGFibGUuY29udGFpbmVyIC5oaWRlLWZvci1sYXJnZSxcbnRhYmxlLmJvZHkgdGFibGUuY29udGFpbmVyIC5yb3cuaGlkZS1mb3ItbGFyZ2Uge1xuICBAbWVkaWEgb25seSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6ICN7JGdsb2JhbC1icmVha3BvaW50fSkge1xuICAgIGRpc3BsYXk6IHRhYmxlICFpbXBvcnRhbnQ7XG4gICAgd2lkdGg6IDEwMCUgIWltcG9ydGFudDtcbiAgfVxufVxuXG50YWJsZS5ib2R5IHRhYmxlLmNvbnRhaW5lciAuY2FsbG91dC1pbm5lci5oaWRlLWZvci1sYXJnZSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogI3skZ2xvYmFsLWJyZWFrcG9pbnR9KSB7XG4gICAgZGlzcGxheTogdGFibGUtY2VsbCAhaW1wb3J0YW50O1xuICAgIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG4gIH1cbn1cblxudGFibGUuYm9keSB0YWJsZS5jb250YWluZXIgLnNob3ctZm9yLWxhcmdlIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiAjeyRnbG9iYWwtYnJlYWtwb2ludH0pIHtcbiAgICBkaXNwbGF5OiBub25lICFpbXBvcnRhbnQ7XG4gICAgd2lkdGg6IDA7XG4gICAgbXNvLWhpZGU6IGFsbDsgLy8gaGlkZSBzZWxlY3RlZCBlbGVtZW50cyBpbiBPdXRsb29rIDIwMDctMjAxM1xuICAgIG92ZXJmbG93OiBoaWRkZW47XG4gIH1cbn1cblxuLy8gW3RvZG9dIGFkZCBpbWFnZSByZXNldHNcbi8vIGltZyB7XG4vLyAgIG1heC1oZWlnaHQ6IDA7XG4vLyAgIHdpZHRoOiAwO1xuLy8gfVxuLy8gaW4gbWVkaWEgcXVlcnlcbi8vIGltZyB7IFxuLy8gICBtYXgtaGVpZ2h0OiBub25lICFpbXBvcnRhbnQ7IFxuLy8gICB3aWR0aDogYXV0byAhaW1wb3J0YW50OyBcbi8vIH1cblxuIiwiLy8gRm91bmRhdGlvbiBmb3IgRW1haWxzIGJ5IFpVUkJcbi8vIHp1cmIuY29tL2luay9cbi8vIExpY2Vuc2VkIHVuZGVyIE1JVCBPcGVuIFNvdXJjZVxuXG4vLy8vXG4vLy8gQGdyb3VwIHR5cG9ncmFwaHlcbi8vLy9cblxuLy8vIEdsb2JhbCBmb250IGNvbG9yLlxuLy8vIEB0eXBlIENvbG9yXG4kZ2xvYmFsLWZvbnQtY29sb3I6ICRibGFjayAhZGVmYXVsdDtcblxuLy8vIEdsb2JhbCBmb250IGZhbWlseS5cbi8vLyBAdHlwZSBGb250XG4kYm9keS1mb250LWZhbWlseTogSGVsdmV0aWNhLCBBcmlhbCwgc2Fucy1zZXJpZiAhZGVmYXVsdDtcblxuLy8vIEdsb2JhbCBmb250IHdlaWdodC5cbi8vLyBAdHlwZSBLZXl3b3JkXG4kZ2xvYmFsLWZvbnQtd2VpZ2h0OiBub3JtYWwgIWRlZmF1bHQ7XG5cbi8vLyBHbG9iYWwgZm9udCB3ZWlnaHQuXG4vLy8gQHR5cGUgS2V5d29yZFxuJGhlYWRlci1jb2xvcjogaW5oZXJpdCAhZGVmYXVsdDtcblxuLy8vIEdsb2JhbCBsaW5lIGhlaWdodC5cbi8vLyBAdHlwZSBOdW1iZXJcbiRnbG9iYWwtbGluZS1oZWlnaHQ6IDEuMyAhZGVmYXVsdDtcblxuLy8vIEZvbnQgc2l6ZSBvZiBib2R5IHRleHQuXG4vLy8gQHR5cGUgTnVtYmVyXG4kZ2xvYmFsLWZvbnQtc2l6ZTogMTZweCAhZGVmYXVsdDtcblxuLy8vIExpbmUgaGVpZ2h0IG9mIGJvZHkgdGV4dC5cbi8vLyBAdHlwZSBOdW1iZXJcbiRib2R5LWxpbmUtaGVpZ2h0OiAkZ2xvYmFsLWxpbmUtaGVpZ2h0ICFkZWZhdWx0O1xuXG4vLy8gRm9udCBmYW1pbHkgb2YgaGVhZGluZ3MuXG4vLy8gQHR5cGUgTGlzdFxuJGhlYWRlci1mb250LWZhbWlseTogJGJvZHktZm9udC1mYW1pbHkgIWRlZmF1bHQ7XG5cbi8vLyBGb250IGZhbWlseSBvZiBoZWFkaW5ncy5cbi8vLyBAdHlwZSBMaXN0XG4kaGVhZGVyLWZvbnQtd2VpZ2h0OiAkZ2xvYmFsLWZvbnQtd2VpZ2h0ICFkZWZhdWx0O1xuXG4vLy8gRm9udCBzaXplIG9mIGA8aDE+YCBlbGVtZW50cy5cbi8vLyBAdHlwZSBOdW1iZXJcbiRoMS1mb250LXNpemU6IDM0cHggIWRlZmF1bHQ7XG5cbi8vLyBGb250IHNpemUgb2YgYDxoMj5gIGVsZW1lbnRzLlxuLy8vIEB0eXBlIE51bWJlclxuJGgyLWZvbnQtc2l6ZTogMzBweCAhZGVmYXVsdDtcblxuLy8vIEZvbnQgc2l6ZSBvZiBgPGgzPmAgZWxlbWVudHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kaDMtZm9udC1zaXplOiAyOHB4ICFkZWZhdWx0O1xuXG4vLy8gRm9udCBzaXplIG9mIGA8aDQ+YCBlbGVtZW50cy5cbi8vLyBAdHlwZSBOdW1iZXJcbiRoNC1mb250LXNpemU6IDI0cHggIWRlZmF1bHQ7XG5cbi8vLyBGb250IHNpemUgb2YgYDxoNT5gIGVsZW1lbnRzLlxuLy8vIEB0eXBlIE51bWJlclxuJGg1LWZvbnQtc2l6ZTogMjBweCAhZGVmYXVsdDtcblxuLy8vIEZvbnQgc2l6ZSBvZiBgPGg2PmAgZWxlbWVudHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kaDYtZm9udC1zaXplOiAxOHB4ICFkZWZhdWx0O1xuXG4vLy8gTWFyZ2luIGJvdHRvbSBvZiBgPGgxPmAgdGhyb3VnaCBgPGg2PmAgZWxlbWVudHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kaGVhZGVyLW1hcmdpbi1ib3R0b206IDEwcHggIWRlZmF1bHQ7XG5cbi8vLyBNYXJnaW4gYm90dG9tIG9mIHBhcmFncmFwaHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kcGFyYWdyYXBoLW1hcmdpbi1ib3R0b206IDEwcHggIWRlZmF1bHQ7XG5cbi8vLyBEZWZhdWx0IGZvbnQgc2l6ZSBmb3IgYDxzbWFsbD5gLlxuLy8vIEB0eXBlIE51bWJlclxuJHNtYWxsLWZvbnQtc2l6ZTogODAlICFkZWZhdWx0O1xuXG4vLy8gQ29sb3Igb2YgYDxzbWFsbD5gIGVsZW1lbnRzIHdoZW4gcGxhY2VkIGluc2lkZSBoZWFkZXJzLlxuLy8vIEB0eXBlIENvbG9yXG4kc21hbGwtZm9udC1jb2xvcjogJG1lZGl1bS1ncmF5ICFkZWZhdWx0O1xuXG4vLy8gRm9udCBzaXplIG9mIGxlYWQgcGFyYWdyYXBocy5cbi8vLyBAdHlwZSBOdW1iZXJcbiRsZWFkLWZvbnQtc2l6ZTogJGdsb2JhbC1mb250LXNpemUgKiAxLjI1ICFkZWZhdWx0O1xuXG4vLy8gTGluZSBoZWlnaHQgb2YgbGVhZCBwYXJhZ3JhcGhzLlxuLy8vIEB0eXBlIE51bWJlclxuJGxlYWQtbGluZS1oZWlnaHQ6IDEuNiAhZGVmYXVsdDtcblxuLy8vIFBhZGRpbmcgaW5zaWRlIHBhcmFncmFwaHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kdGV4dC1wYWRkaW5nOiAxMHB4ICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBsaW5lIGhlaWdodCBmb3Igc3ViaGVhZGVycy5cbi8vLyBAdHlwZSBOdW1iZXJcbiRzdWJoZWFkZXItbGluZWhlaWdodDogMS40ICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBmb250IGNvbG9yIGZvciBzdWJoZWFkZXJzLlxuLy8vIEB0eXBlIENvbG9yXG4kc3ViaGVhZGVyLWNvbG9yOiAkZGFyay1ncmF5ICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBmb250IHdlaWdodCBmb3Igc3ViaGVhZGVycy5cbi8vLyBAdHlwZSBTdHJpbmdcbiRzdWJoZWFkZXItZm9udC13ZWlnaHQ6ICRnbG9iYWwtZm9udC13ZWlnaHQgIWRlZmF1bHQ7XG5cbi8vLyBEZWZhdWx0IHRvcCBtYXJnaW4gZm9yIHN1YmhoZWFkZXJzLlxuLy8vIEB0eXBlIE51bWJlclxuJHN1YmhlYWRlci1tYXJnaW4tdG9wOiA0cHggIWRlZmF1bHQ7XG5cbi8vLyBEZWZhdWx0IGJvdHRvbSBtYXJnaW4gZm9yIHN1YmhlYWRlcnMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kc3ViaGVhZGVyLW1hcmdpbi1ib3R0b206IDhweCAhZGVmYXVsdDtcblxuLy8vIE1heGltdW0gd2lkdGggb2YgYSBkaXZpZGVyLlxuLy8vIEB0eXBlIE51bWJlclxuJGhyLXdpZHRoOiAkZ2xvYmFsLXdpZHRoICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBib3JkZXIgZm9yIGEgZGl2aWRlci5cbi8vLyBAdHlwZSBMaXN0XG4kaHItYm9yZGVyOiAxcHggc29saWQgJGJsYWNrICFkZWZhdWx0O1xuXG4vLy8gRGVmYXVsdCBtYXJnaW4gZm9yIGEgZGl2aWRlci5cbi8vLyBAdHlwZSBOdW1iZXIgfCBMaXN0XG4kaHItbWFyZ2luOiAyMHB4IGF1dG8gIWRlZmF1bHQ7XG5cbi8vLyBUZXh0IGRlY29yYXRpb24gZm9yIGFuY2hvcnMuXG4vLy8gQHR5cGUgS2V5d29yZFxuJGFuY2hvci10ZXh0LWRlY29yYXRpb246IG5vbmUgIWRlZmF1bHQ7XG5cbi8vLyBUZXh0IGNvbG9yIG9mIGFuY2hvcnMuXG4vLy8gQHR5cGUgQ29sb3JcbiRhbmNob3ItY29sb3I6ICRwcmltYXJ5LWNvbG9yICFkZWZhdWx0O1xuXG4vLy8gVGV4dCBjb2xvciBvZiBhbmNob3JzIHRvIHZpc2l0ZWQgbGlua3MuXG4vLy8gQHR5cGUgQ29sb3JcbiRhbmNob3ItY29sb3ItdmlzaXRlZDogJGFuY2hvci1jb2xvciAhZGVmYXVsdDtcblxuLy8vIFRleHQgY29sb3Igb2YgYW5jaG9ycyBvbiBob3Zlci5cbi8vLyBAdHlwZSBDb2xvclxuJGFuY2hvci1jb2xvci1ob3ZlcjogZGFya2VuKCRwcmltYXJ5LWNvbG9yLCAxMCUpICFkZWZhdWx0O1xuXG4vLy8gVGV4dCBjb2xvciBvZiBhY3RpdmUgYW5jaG9ycy5cbi8vLyBAdHlwZSBDb2xvclxuJGFuY2hvci1jb2xvci1hY3RpdmU6ICRhbmNob3ItY29sb3ItaG92ZXIgIWRlZmF1bHQ7XG5cbi8vLyBEZWZhdWx0IGZvbnQgc2l6ZSBmb3Igc3RhdGlzdGljIG51bWJlcnMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kc3RhdC1mb250LXNpemU6IDQwcHggIWRlZmF1bHQ7XG5cbmJvZHksXG50YWJsZS5ib2R5LFxuaDEsXG5oMixcbmgzLFxuaDQsXG5oNSxcbmg2LFxucCxcbnRkLFxudGgsXG5hIHtcbiAgY29sb3I6ICRnbG9iYWwtZm9udC1jb2xvcjtcbiAgZm9udC1mYW1pbHk6ICRib2R5LWZvbnQtZmFtaWx5O1xuICBmb250LXdlaWdodDogJGdsb2JhbC1mb250LXdlaWdodDtcbiAgcGFkZGluZzogMDtcbiAgbWFyZ2luOiAwO1xuICBNYXJnaW46IDA7XG4gIHRleHQtYWxpZ246IGxlZnQ7XG4gIGxpbmUtaGVpZ2h0OiAkZ2xvYmFsLWxpbmUtaGVpZ2h0O1xufVxuXG5oMSxcbmgyLFxuaDMsXG5oNCxcbmg1LFxuaDYge1xuICBjb2xvcjogJGhlYWRlci1jb2xvcjtcbiAgd29yZC13cmFwOiBub3JtYWw7XG4gIGZvbnQtZmFtaWx5OiAkaGVhZGVyLWZvbnQtZmFtaWx5O1xuICBmb250LXdlaWdodDogJGhlYWRlci1mb250LXdlaWdodDtcbiAgbWFyZ2luLWJvdHRvbTogJGhlYWRlci1tYXJnaW4tYm90dG9tO1xuICBNYXJnaW4tYm90dG9tOiAkaGVhZGVyLW1hcmdpbi1ib3R0b207XG59XG5cbmgxIHtcbiAgZm9udC1zaXplOiAkaDEtZm9udC1zaXplO1xufVxuXG5oMiB7XG4gIGZvbnQtc2l6ZTogJGgyLWZvbnQtc2l6ZTtcbn1cblxuaDMge1xuICBmb250LXNpemU6ICRoMy1mb250LXNpemU7XG59XG5cbmg0IHtcbiAgZm9udC1zaXplOiAkaDQtZm9udC1zaXplO1xufVxuXG5oNSB7XG4gIGZvbnQtc2l6ZTogJGg1LWZvbnQtc2l6ZTtcbn1cblxuaDYge1xuICBmb250LXNpemU6ICRoNi1mb250LXNpemU7XG59XG5cbmJvZHksXG50YWJsZS5ib2R5LFxucCxcbnRkLFxudGgge1xuICBmb250LXNpemU6ICRnbG9iYWwtZm9udC1zaXplO1xuICBsaW5lLWhlaWdodDogJGJvZHktbGluZS1oZWlnaHQ7XG59XG5cbnAge1xuICBtYXJnaW4tYm90dG9tOiAkcGFyYWdyYXBoLW1hcmdpbi1ib3R0b207XG4gIE1hcmdpbi1ib3R0b206ICRwYXJhZ3JhcGgtbWFyZ2luLWJvdHRvbTtcblxuICAmLmxlYWQge1xuICAgIGZvbnQtc2l6ZTogJGxlYWQtZm9udC1zaXplO1xuICAgIGxpbmUtaGVpZ2h0OiAkbGVhZC1saW5lLWhlaWdodDtcbiAgfVxuXG4gICYuc3ViaGVhZGVyIHtcbiAgICBtYXJnaW4tdG9wOiAkc3ViaGVhZGVyLW1hcmdpbi10b3A7XG4gICAgbWFyZ2luLWJvdHRvbTogJHN1YmhlYWRlci1tYXJnaW4tYm90dG9tO1xuICAgIE1hcmdpbi10b3A6ICRzdWJoZWFkZXItbWFyZ2luLXRvcDtcbiAgICBNYXJnaW4tYm90dG9tOiAkc3ViaGVhZGVyLW1hcmdpbi1ib3R0b207XG4gICAgZm9udC13ZWlnaHQ6ICRzdWJoZWFkZXItZm9udC13ZWlnaHQ7XG4gICAgbGluZS1oZWlnaHQ6ICRzdWJoZWFkZXItbGluZWhlaWdodDtcbiAgICBjb2xvcjogJHN1YmhlYWRlci1jb2xvcjtcbiAgfVxufVxuXG5zbWFsbCB7XG4gIGZvbnQtc2l6ZTogJHNtYWxsLWZvbnQtc2l6ZTtcbiAgY29sb3I6ICRzbWFsbC1mb250LWNvbG9yO1xufVxuXG5hIHtcbiAgY29sb3I6ICRhbmNob3ItY29sb3I7XG4gIHRleHQtZGVjb3JhdGlvbjogJGFuY2hvci10ZXh0LWRlY29yYXRpb247XG5cbiAgJjpob3ZlciB7XG4gICAgY29sb3I6ICRhbmNob3ItY29sb3ItaG92ZXI7XG4gIH1cblxuICAmOmFjdGl2ZSB7XG4gICAgY29sb3I6ICRhbmNob3ItY29sb3ItYWN0aXZlO1xuICB9XG5cbiAgJjp2aXNpdGVkIHtcbiAgICBjb2xvcjogJGFuY2hvci1jb2xvci12aXNpdGVkO1xuICB9XG59XG5cbmgxIGEsXG5oMSBhOnZpc2l0ZWQsXG5oMiBhLFxuaDIgYTp2aXNpdGVkLFxuaDMgYSxcbmgzIGE6dmlzaXRlZCxcbmg0IGEsXG5oNCBhOnZpc2l0ZWQsXG5oNSBhLFxuaDUgYTp2aXNpdGVkLFxuaDYgYSxcbmg2IGE6dmlzaXRlZCB7XG4gIGNvbG9yOiAkYW5jaG9yLWNvbG9yO1xufVxuXG5wcmUge1xuICBiYWNrZ3JvdW5kOiAkbGlnaHQtZ3JheTtcbiAgbWFyZ2luOiAzMHB4IDA7XG4gIE1hcmdpbjogMzBweCAwO1xuXG4gIGNvZGUge1xuICAgIGNvbG9yOiAkbWVkaXVtLWdyYXk7XG5cbiAgICBzcGFuLmNhbGxvdXQge1xuICAgICAgY29sb3I6ICRkYXJrLWdyYXk7XG4gICAgICBmb250LXdlaWdodDogYm9sZDtcbiAgICB9XG5cbiAgICBzcGFuLmNhbGxvdXQtc3Ryb25nIHtcbiAgICAgIGNvbG9yOiAkcHJlLWNvbG9yO1xuICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gICAgfVxuICB9XG59XG5cbi8vIEhvcml6b250YWwgcnVsZVxudGFibGUuaHIge1xuICB3aWR0aDogMTAwJTtcbiAgXG4gIHRoIHtcbiAgICBoZWlnaHQ6IDA7XG4gICAgbWF4LXdpZHRoOiAkaHItd2lkdGg7XG4gICAgYm9yZGVyLXRvcDogMDtcbiAgICBib3JkZXItcmlnaHQ6IDA7XG4gICAgYm9yZGVyLWJvdHRvbTogJGhyLWJvcmRlcjtcbiAgICBib3JkZXItbGVmdDogMDtcbiAgICBtYXJnaW46ICRoci1tYXJnaW47XG4gICAgTWFyZ2luOiAkaHItbWFyZ2luO1xuICAgIGNsZWFyOiBib3RoO1xuICB9XG59XG5cbi8vIFVzZSB0byBzdHlsZSBhIGxhcmdlIG51bWJlciB0byBkaXNwbGF5IGEgc3RhdGlzdGljXG4uc3RhdCB7XG4gIGZvbnQtc2l6ZTogJHN0YXQtZm9udC1zaXplO1xuICBsaW5lLWhlaWdodDogMTtcblxuICBwICsgJiB7XG4gICAgbWFyZ2luLXRvcDogLTE2cHg7XG4gICAgTWFyZ2luLXRvcDogLTE2cHg7XG4gIH1cbn1cblxuLy8gcHJlaGVhZGVyIHN0eWxlc1xuc3Bhbi5wcmVoZWFkZXIge1xuICBkaXNwbGF5OiBub25lICFpbXBvcnRhbnQ7XG4gIHZpc2liaWxpdHk6IGhpZGRlbjtcbiAgbXNvLWhpZGU6IGFsbCAhaW1wb3J0YW50O1xuICBmb250LXNpemU6IDFweDtcbiAgY29sb3I6ICRib2R5LWJhY2tncm91bmQ7IC8vIG5lZWRzIHRvIG1hdGNoIGJhY2tncm91bmQgY29sb3Igb2YgaXQncyBjb250YWluZXJcbiAgbGluZS1oZWlnaHQ6IDFweDtcbiAgbWF4LWhlaWdodDogMHB4O1xuICBtYXgtd2lkdGg6IDBweDtcbiAgb3BhY2l0eTogMDtcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn0iLCIvLyBGb3VuZGF0aW9uIGZvciBFbWFpbHMgYnkgWlVSQlxuLy8genVyYi5jb20vaW5rL1xuLy8gTGljZW5zZWQgdW5kZXIgTUlUIE9wZW4gU291cmNlXG5cbi8vLy9cbi8vLyBAZ3JvdXAgYnV0dG9uXG4vLy8vXG5cbi8vLyBQYWRkaW5nIGluc2lkZSBidXR0b25zIGF0IHZhcmlvdXMgc2l6ZXMuXG4vLy8gQHR5cGUgTWFwXG4kYnV0dG9uLXBhZGRpbmc6IChcbiAgdGlueTogNHB4IDhweCA0cHggOHB4LFxuICBzbWFsbDogNXB4IDEwcHggNXB4IDEwcHgsXG4gIGRlZmF1bHQ6IDhweCAxNnB4IDhweCAxNnB4LFxuICBsYXJnZTogMTBweCAyMHB4IDEwcHggMjBweCxcbikgIWRlZmF1bHQ7XG5cbi8vLyBGb250IHNpemVzIG9mIGJ1dHRvbnMgYXQgdmFyaW91cyBzaXplcy5cbi8vLyBAdHlwZSBNYXBcbiRidXR0b24tZm9udC1zaXplOiAoXG4gIHRpbnk6IDEwcHgsXG4gIHNtYWxsOiAxMnB4LFxuICBkZWZhdWx0OiAxNnB4LFxuICBsYXJnZTogMjBweCxcbikgIWRlZmF1bHQ7XG5cbi8vLyBUZXh0IGNvbG9yIG9mIGJ1dHRvbnMuXG4vLy8gQHR5cGUgQ29sb3JcbiRidXR0b24tY29sb3I6ICR3aGl0ZSAhZGVmYXVsdDtcblxuLy8vIFRleHQgY29sb3Igb2YgYnV0dG9ucyB3aXRoIGEgbGlnaHQgYmFja2dyb3VuZC5cbi8vLyBAdHlwZSBDb2xvclxuJGJ1dHRvbi1jb2xvci1hbHQ6ICRtZWRpdW0tZ3JheSAhZGVmYXVsdDtcblxuLy8vIEZvbnQgd2VpZ2h0IG9mIGJ1dHRvbnMuXG4vLy8gQHR5cGUgV2VpZ2h0XG4kYnV0dG9uLWZvbnQtd2VpZ2h0OiBib2xkICFkZWZhdWx0O1xuXG4vLy8gTWFyZ2luIGFyb3VuZCBidXR0b25zLlxuLy8vIEB0eXBlIExpc3RcbiRidXR0b24tbWFyZ2luOiAwIDAgJGdsb2JhbC1tYXJnaW4gMCAhZGVmYXVsdDtcblxuLy8vIEJhY2tncm91bmQgY29sb3Igb2YgYnV0dG9ucy5cbi8vLyBAdHlwZSBDb2xvclxuJGJ1dHRvbi1iYWNrZ3JvdW5kOiAkcHJpbWFyeS1jb2xvciAhZGVmYXVsdDtcblxuLy8vIEJvcmRlciBhcm91bmQgYnV0dG9ucy5cbi8vLyBAdHlwZSBCb3JkZXJcbiRidXR0b24tYm9yZGVyOiAycHggc29saWQgJGJ1dHRvbi1iYWNrZ3JvdW5kICFkZWZhdWx0O1xuXG4vLy8gQm9yZGVyIHJhZGl1cyBvZiBidXR0b25zLiBOb3Qgc3VwcG9ydGVkIGJ5IGFsbCBlbWFpbCBjbGllbnRzLlxuLy8vIEB0eXBlIE51bWJlclxuJGJ1dHRvbi1yYWRpdXM6ICRnbG9iYWwtcmFkaXVzICFkZWZhdWx0O1xuXG4vLy8gQm9yZGVyIHJhZGl1cyBvZiByb3VuZGVkIGJ1dHRvbnMuIE5vdCBzdXBwb3J0ZWQgYnkgYWxsIGVtYWlsIGNsaWVudHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kYnV0dG9uLXJvdW5kZWQ6ICRnbG9iYWwtcm91bmRlZCAhZGVmYXVsdDtcblxudGFibGUuYnV0dG9uIHtcbiAgd2lkdGg6IGF1dG87XG4gIG1hcmdpbjogJGJ1dHRvbi1tYXJnaW47XG4gIE1hcmdpbjogJGJ1dHRvbi1tYXJnaW47XG5cbiAgdGFibGUge1xuXG4gICAgdGQge1xuICAgICAgdGV4dC1hbGlnbjogbGVmdDtcbiAgICAgIGNvbG9yOiAkYnV0dG9uLWNvbG9yO1xuICAgICAgYmFja2dyb3VuZDogJGJ1dHRvbi1iYWNrZ3JvdW5kO1xuICAgICAgYm9yZGVyOiAkYnV0dG9uLWJvcmRlcjtcblxuICAgICAgYSB7XG4gICAgICAgIGZvbnQtZmFtaWx5OiAkYm9keS1mb250LWZhbWlseTtcbiAgICAgICAgZm9udC1zaXplOiBtYXAtZ2V0KCRidXR0b24tZm9udC1zaXplLCBkZWZhdWx0KTtcbiAgICAgICAgZm9udC13ZWlnaHQ6ICRidXR0b24tZm9udC13ZWlnaHQ7XG4gICAgICAgIGNvbG9yOiAkYnV0dG9uLWNvbG9yO1xuICAgICAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgcGFkZGluZzogbWFwLWdldCgkYnV0dG9uLXBhZGRpbmcsIGRlZmF1bHQpO1xuICAgICAgICBib3JkZXI6IDAgc29saWQgJGJ1dHRvbi1iYWNrZ3JvdW5kO1xuICAgICAgICBib3JkZXItcmFkaXVzOiAkYnV0dG9uLXJhZGl1cztcbiAgICAgIH1cbiAgICB9XG4gIH1cblxuICAmLnJhZGl1cyB0YWJsZSB0ZCB7XG4gICAgYm9yZGVyLXJhZGl1czogJGJ1dHRvbi1yYWRpdXM7XG4gICAgYm9yZGVyOiBub25lO1xuICB9XG5cbiAgJi5yb3VuZGVkIHRhYmxlIHRkIHtcbiAgICBib3JkZXItcmFkaXVzOiAkYnV0dG9uLXJvdW5kZWQ7XG4gICAgYm9yZGVyOiBub25lO1xuICB9XG59XG5cbnRhYmxlLmJ1dHRvbjpob3ZlciB0YWJsZSB0ciB0ZCBhLFxudGFibGUuYnV0dG9uOmFjdGl2ZSB0YWJsZSB0ciB0ZCBhLFxudGFibGUuYnV0dG9uIHRhYmxlIHRyIHRkIGE6dmlzaXRlZCxcbnRhYmxlLmJ1dHRvbi50aW55OmhvdmVyIHRhYmxlIHRyIHRkIGEsXG50YWJsZS5idXR0b24udGlueTphY3RpdmUgdGFibGUgdHIgdGQgYSxcbnRhYmxlLmJ1dHRvbi50aW55IHRhYmxlIHRyIHRkIGE6dmlzaXRlZCxcbnRhYmxlLmJ1dHRvbi5zbWFsbDpob3ZlciB0YWJsZSB0ciB0ZCBhLFxudGFibGUuYnV0dG9uLnNtYWxsOmFjdGl2ZSB0YWJsZSB0ciB0ZCBhLFxudGFibGUuYnV0dG9uLnNtYWxsIHRhYmxlIHRyIHRkIGE6dmlzaXRlZCxcbnRhYmxlLmJ1dHRvbi5sYXJnZTpob3ZlciB0YWJsZSB0ciB0ZCBhLFxudGFibGUuYnV0dG9uLmxhcmdlOmFjdGl2ZSB0YWJsZSB0ciB0ZCBhLFxudGFibGUuYnV0dG9uLmxhcmdlIHRhYmxlIHRyIHRkIGE6dmlzaXRlZCB7XG4gIGNvbG9yOiAkYnV0dG9uLWNvbG9yO1xufVxuXG50YWJsZS5idXR0b24udGlueSB7XG4gIHRhYmxlIHtcbiAgICB0ZCxcbiAgICBhIHtcbiAgICAgIHBhZGRpbmc6IG1hcC1nZXQoJGJ1dHRvbi1wYWRkaW5nLCB0aW55KTtcbiAgICB9XG5cbiAgICBhIHtcbiAgICAgIGZvbnQtc2l6ZTogbWFwLWdldCgkYnV0dG9uLWZvbnQtc2l6ZSwgdGlueSk7XG4gICAgICBmb250LXdlaWdodDogbm9ybWFsO1xuICAgIH1cbiAgfVxufVxuXG50YWJsZS5idXR0b24uc21hbGwge1xuICB0YWJsZSB7XG4gICAgdGQsXG4gICAgYSB7XG4gICAgICBwYWRkaW5nOiBtYXAtZ2V0KCRidXR0b24tcGFkZGluZywgc21hbGwpO1xuICAgICAgZm9udC1zaXplOiBtYXAtZ2V0KCRidXR0b24tZm9udC1zaXplLCBzbWFsbCk7XG4gICAgfVxuICB9XG59XG5cbnRhYmxlLmJ1dHRvbi5sYXJnZSB7XG4gIHRhYmxlIHtcbiAgICBhIHtcbiAgICAgIHBhZGRpbmc6IG1hcC1nZXQoJGJ1dHRvbi1wYWRkaW5nLCBsYXJnZSk7XG4gICAgICBmb250LXNpemU6IG1hcC1nZXQoJGJ1dHRvbi1mb250LXNpemUsIGxhcmdlKTtcbiAgICB9XG4gIH1cbn1cblxudGFibGUuYnV0dG9uLmV4cGFuZCxcbnRhYmxlLmJ1dHRvbi5leHBhbmRlZCB7XG4gIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG5cbiAgdGFibGUge1xuICAgIHdpZHRoOiAxMDAlO1xuXG4gICAgYSB7XG4gICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgICB3aWR0aDogMTAwJTtcbiAgICAgIHBhZGRpbmctbGVmdDogMDtcbiAgICAgIHBhZGRpbmctcmlnaHQ6IDA7XG4gICAgfVxuICB9XG5cbiAgY2VudGVyIHtcbiAgICBtaW4td2lkdGg6IDA7XG4gIH1cbn1cblxudGFibGUuYnV0dG9uOmhvdmVyLFxudGFibGUuYnV0dG9uOnZpc2l0ZWQsXG50YWJsZS5idXR0b246YWN0aXZlIHtcbiAgdGFibGUge1xuICAgIHRkIHtcbiAgICAgIGJhY2tncm91bmQ6IGRhcmtlbigkYnV0dG9uLWJhY2tncm91bmQsIDEwJSk7XG4gICAgICBjb2xvcjogJGJ1dHRvbi1jb2xvcjtcbiAgICB9XG4gIH1cbn1cblxudGFibGUuYnV0dG9uOmhvdmVyLFxudGFibGUuYnV0dG9uOnZpc2l0ZWQsXG50YWJsZS5idXR0b246YWN0aXZlIHtcbiAgdGFibGUge1xuICAgIGEge1xuICAgICAgYm9yZGVyOiAwIHNvbGlkIGRhcmtlbigkYnV0dG9uLWJhY2tncm91bmQsIDEwJSk7XG4gICAgfVxuICB9XG59XG5cbnRhYmxlLmJ1dHRvbi5zZWNvbmRhcnkge1xuICB0YWJsZSB7XG4gICAgdGQge1xuICAgICAgYmFja2dyb3VuZDogJHNlY29uZGFyeS1jb2xvcjtcbiAgICAgIGNvbG9yOiAkYnV0dG9uLWNvbG9yO1xuICAgICAgYm9yZGVyOiAwcHggc29saWQgJHNlY29uZGFyeS1jb2xvcjtcbiAgICB9XG5cbiAgICBhIHtcbiAgICAgIGNvbG9yOiAkYnV0dG9uLWNvbG9yO1xuICAgICAgYm9yZGVyOiAwIHNvbGlkICRzZWNvbmRhcnktY29sb3I7XG4gICAgfVxuICB9XG59XG5cbnRhYmxlLmJ1dHRvbi5zZWNvbmRhcnk6aG92ZXIge1xuICB0YWJsZSB7XG4gICAgdGQge1xuICAgICAgYmFja2dyb3VuZDogbGlnaHRlbigkc2Vjb25kYXJ5LWNvbG9yLCAxMCUpO1xuICAgICAgY29sb3I6ICRidXR0b24tY29sb3I7XG4gICAgfVxuXG4gICAgYSB7XG4gICAgICBib3JkZXI6IDAgc29saWQgbGlnaHRlbigkc2Vjb25kYXJ5LWNvbG9yLCAxMCUpO1xuICAgIH1cbiAgfVxufVxuXG50YWJsZS5idXR0b24uc2Vjb25kYXJ5OmhvdmVyIHtcbiAgdGFibGUge1xuICAgIHRkIGEge1xuICAgICAgY29sb3I6ICRidXR0b24tY29sb3I7XG4gICAgfVxuICB9XG59XG5cbnRhYmxlLmJ1dHRvbi5zZWNvbmRhcnk6YWN0aXZlIHtcbiAgdGFibGUge1xuICAgIHRkIGEge1xuICAgICAgY29sb3I6ICRidXR0b24tY29sb3I7XG4gICAgfVxuICB9XG59XG5cbnRhYmxlLmJ1dHRvbi5zZWNvbmRhcnkge1xuICB0YWJsZSB7XG4gICAgdGQgYTp2aXNpdGVkIHtcbiAgICAgIGNvbG9yOiAkYnV0dG9uLWNvbG9yO1xuICAgIH1cbiAgfVxufVxuXG50YWJsZS5idXR0b24uc3VjY2VzcyB7XG4gIHRhYmxlIHtcbiAgICB0ZCB7XG4gICAgICBiYWNrZ3JvdW5kOiAkc3VjY2Vzcy1jb2xvcjtcbiAgICAgIGJvcmRlcjogMHB4IHNvbGlkICRzdWNjZXNzLWNvbG9yO1xuICAgIH1cblxuICAgIGEge1xuICAgICAgYm9yZGVyOiAwIHNvbGlkICRzdWNjZXNzLWNvbG9yO1xuICAgIH1cbiAgfVxufVxuXG50YWJsZS5idXR0b24uc3VjY2Vzczpob3ZlciB7XG4gIHRhYmxlIHtcbiAgICB0ZCB7XG4gICAgICBiYWNrZ3JvdW5kOiBkYXJrZW4oJHN1Y2Nlc3MtY29sb3IsIDEwJSk7XG4gICAgfVxuXG4gICAgYSB7XG4gICAgICBib3JkZXI6IDAgc29saWQgZGFya2VuKCRzdWNjZXNzLWNvbG9yLCAxMCUpO1xuICAgIH1cbiAgfVxufVxuXG50YWJsZS5idXR0b24uYWxlcnQge1xuICB0YWJsZSB7XG4gICAgdGQge1xuICAgICAgYmFja2dyb3VuZDogJGFsZXJ0LWNvbG9yO1xuICAgICAgYm9yZGVyOiAwcHggc29saWQgJGFsZXJ0LWNvbG9yO1xuICAgIH1cblxuICAgIGEge1xuICAgICAgYm9yZGVyOiAwIHNvbGlkICRhbGVydC1jb2xvcjtcbiAgICB9XG4gIH1cbn1cblxudGFibGUuYnV0dG9uLmFsZXJ0OmhvdmVyIHtcbiAgdGFibGUge1xuICAgIHRkIHtcbiAgICAgIGJhY2tncm91bmQ6IGRhcmtlbigkYWxlcnQtY29sb3IsIDEwJSk7XG4gICAgfVxuXG4gICAgYSB7XG4gICAgICBib3JkZXI6IDAgc29saWQgZGFya2VuKCRhbGVydC1jb2xvciwgMTAlKTtcbiAgICB9XG4gIH1cbn1cblxudGFibGUuYnV0dG9uLndhcm5pbmcge1xuICB0YWJsZSB7XG4gICAgdGQge1xuICAgICAgYmFja2dyb3VuZDogJHdhcm5pbmctY29sb3I7XG4gICAgICBib3JkZXI6IDBweCBzb2xpZCAkd2FybmluZy1jb2xvcjtcbiAgICB9XG5cbiAgICBhIHtcbiAgICAgIGJvcmRlcjogMHB4IHNvbGlkICR3YXJuaW5nLWNvbG9yO1xuICAgIH1cbiAgfVxufVxuXG50YWJsZS5idXR0b24ud2FybmluZzpob3ZlciB7XG4gIHRhYmxlIHtcbiAgICB0ZCB7XG4gICAgICBiYWNrZ3JvdW5kOiBkYXJrZW4oJHdhcm5pbmctY29sb3IsIDEwJSk7XG4gICAgfVxuXG4gICAgYSB7XG4gICAgICBib3JkZXI6IDBweCBzb2xpZCBkYXJrZW4oJHdhcm5pbmctY29sb3IsIDEwJSk7XG4gICAgfVxuICB9XG59XG4iLCIvLyBGb3VuZGF0aW9uIGZvciBFbWFpbHMgYnkgWlVSQlxuLy8genVyYi5jb20vaW5rL1xuLy8gTGljZW5zZWQgdW5kZXIgTUlUIE9wZW4gU291cmNlXG5cbi8vLy9cbi8vLyBAZ3JvdXAgY2FsbG91dFxuLy8vL1xuXG4vLy8gQmFja2dyb3VuZCBjb2xvciBvZiBhIGNhbGxvdXQuXG4vLy8gQHR5cGUgQ29sb3JcbiRjYWxsb3V0LWJhY2tncm91bmQ6ICR3aGl0ZSAhZGVmYXVsdDtcblxuLy8vIEZhZGUgdmFsdWUgZm9yIGNhbGxvdXQgYmFja2dyb3VuZHMuXG4vLy8gQHR5cGUgTnVtYmVyXG4kY2FsbG91dC1iYWNrZ3JvdW5kLWZhZGU6IDg1JSAhZGVmYXVsdDtcblxuLy8vIFBhZGRpbmcgaW5zaWRlIGEgY2FsbG91dC5cbi8vLyBAdHlwZSBMZW5ndGhcbiRjYWxsb3V0LXBhZGRpbmc6IDEwcHggIWRlZmF1bHQ7XG5cbi8vLyBCb3R0b20gbWFyZ2luIG9mIGEgY2FsbG91dC5cbi8vLyBAdHlwZSBMZW5ndGhcbiRjYWxsb3V0LW1hcmdpbi1ib3R0b206ICRnbG9iYWwtbWFyZ2luICFkZWZhdWx0O1xuXG4vLy8gQm9yZGVyIGFyb3VuZCBhIGNhbGxvdXQuXG4vLy8gQHR5cGUgQm9yZGVyXG4kY2FsbG91dC1ib3JkZXI6IDFweCBzb2xpZCBkYXJrZW4oJGNhbGxvdXQtYmFja2dyb3VuZCwgMjAlKSAhZGVmYXVsdDtcblxuLy8vIEJvcmRlciBhcm91bmQgYSBjYWxsb3V0IHdpdGggdGhlIGAuc3VjY2Vzc2AgY2xhc3MuXG4vLy8gQHR5cGUgQm9yZGVyXG4kY2FsbG91dC1ib3JkZXItc2Vjb25kYXJ5OiAxcHggc29saWQgZGFya2VuKCRzZWNvbmRhcnktY29sb3IsIDIwJSkgIWRlZmF1bHQ7XG5cbi8vLyBCb3JkZXIgYXJvdW5kIGEgY2FsbG91dCB3aXRoIHRoZSBgLnN1Y2Nlc3NgIGNsYXNzLlxuLy8vIEB0eXBlIEJvcmRlclxuJGNhbGxvdXQtYm9yZGVyLXN1Y2Nlc3M6IDFweCBzb2xpZCBkYXJrZW4oJHN1Y2Nlc3MtY29sb3IsIDIwJSkgIWRlZmF1bHQ7XG5cbi8vLyBCb3JkZXIgYXJvdW5kIGEgY2FsbG91dCB3aXRoIHRoZSBgLndhcm5pbmdgIGNsYXNzLlxuLy8vIEB0eXBlIEJvcmRlclxuJGNhbGxvdXQtYm9yZGVyLXdhcm5pbmc6IDFweCBzb2xpZCBkYXJrZW4oJHdhcm5pbmctY29sb3IsIDIwJSkgIWRlZmF1bHQ7XG5cbi8vLyBCb3JkZXIgYXJvdW5kIGEgY2FsbG91dCB3aXRoIHRoZSBgLmFsZXJ0YCBjbGFzcy5cbi8vLyBAdHlwZSBCb3JkZXJcbiRjYWxsb3V0LWJvcmRlci1hbGVydDogMXB4IHNvbGlkIGRhcmtlbigkYWxlcnQtY29sb3IsIDIwJSkgIWRlZmF1bHQ7XG5cbnRhYmxlLmNhbGxvdXQge1xuICBtYXJnaW4tYm90dG9tOiAkY2FsbG91dC1tYXJnaW4tYm90dG9tO1xuICBNYXJnaW4tYm90dG9tOiAkY2FsbG91dC1tYXJnaW4tYm90dG9tO1xufVxuXG50aC5jYWxsb3V0LWlubmVyIHtcbiAgd2lkdGg6IDEwMCU7XG4gIGJvcmRlcjogJGNhbGxvdXQtYm9yZGVyO1xuICBwYWRkaW5nOiAkY2FsbG91dC1wYWRkaW5nO1xuICBiYWNrZ3JvdW5kOiAkY2FsbG91dC1iYWNrZ3JvdW5kO1xuXG4gICYucHJpbWFyeSB7XG4gICAgYmFja2dyb3VuZDogc2NhbGUtY29sb3IoJHByaW1hcnktY29sb3IsICRsaWdodG5lc3M6ICRjYWxsb3V0LWJhY2tncm91bmQtZmFkZSk7XG4gICAgYm9yZGVyOiAkY2FsbG91dC1ib3JkZXItc2Vjb25kYXJ5O1xuICAgIGNvbG9yOiAkYmxhY2s7XG4gIH1cblxuICAmLnNlY29uZGFyeSB7XG4gICAgYmFja2dyb3VuZDogc2NhbGUtY29sb3IoJHNlY29uZGFyeS1jb2xvciwgJGxpZ2h0bmVzczogJGNhbGxvdXQtYmFja2dyb3VuZC1mYWRlKTtcbiAgICBib3JkZXI6ICRjYWxsb3V0LWJvcmRlci1zZWNvbmRhcnk7XG4gICAgY29sb3I6ICRibGFjaztcbiAgfVxuXG4gICYuc3VjY2VzcyB7XG4gICAgYmFja2dyb3VuZDogc2NhbGUtY29sb3IoJHN1Y2Nlc3MtY29sb3IsICRsaWdodG5lc3M6ICRjYWxsb3V0LWJhY2tncm91bmQtZmFkZSk7XG4gICAgYm9yZGVyOiAkY2FsbG91dC1ib3JkZXItc3VjY2VzcztcbiAgICBjb2xvcjogJHdoaXRlO1xuICB9XG5cbiAgJi53YXJuaW5nIHtcbiAgICBiYWNrZ3JvdW5kOiBzY2FsZS1jb2xvcigkd2FybmluZy1jb2xvciwgJGxpZ2h0bmVzczogJGNhbGxvdXQtYmFja2dyb3VuZC1mYWRlKTtcbiAgICBib3JkZXI6ICRjYWxsb3V0LWJvcmRlci13YXJuaW5nO1xuICAgIGNvbG9yOiAkd2hpdGU7XG4gIH1cblxuICAmLmFsZXJ0IHtcbiAgICBiYWNrZ3JvdW5kOiBzY2FsZS1jb2xvcigkYWxlcnQtY29sb3IsICRsaWdodG5lc3M6ICRjYWxsb3V0LWJhY2tncm91bmQtZmFkZSk7XG4gICAgYm9yZGVyOiAkY2FsbG91dC1ib3JkZXItYWxlcnQ7XG4gICAgY29sb3I6ICR3aGl0ZTtcbiAgfVxufVxuIiwiLy8gRm91bmRhdGlvbiBmb3IgRW1haWxzIGJ5IFpVUkJcbi8vIHp1cmIuY29tL2luay9cbi8vIExpY2Vuc2VkIHVuZGVyIE1JVCBPcGVuIFNvdXJjZVxuXG4vLy8vXG4vLy8gQGdyb3VwIHRodW1ibmFpbFxuLy8vL1xuXG4vLy8gQm9yZGVyIGFyb3VuZCB0aHVtYm5haWwgaW1hZ2VzLlxuLy8vIEB0eXBlIEJvcmRlclxuJHRodW1ibmFpbC1ib3JkZXI6IHNvbGlkIDRweCAkd2hpdGUgIWRlZmF1bHQ7XG5cbi8vLyBCb3R0b20gbWFyZ2luIGZvciB0aHVtYm5haWwgaW1hZ2VzLlxuLy8vIEB0eXBlIExlbmd0aFxuJHRodW1ibmFpbC1tYXJnaW4tYm90dG9tOiAkZ2xvYmFsLW1hcmdpbiAhZGVmYXVsdDtcblxuLy8vIEJveCBzaGFkb3cgdW5kZXIgdGh1bWJuYWlsIGltYWdlcy5cbi8vLyBAdHlwZSBTaGFkb3dcbiR0aHVtYm5haWwtc2hhZG93OiAwIDAgMCAxcHggcmdiYSgkYmxhY2ssIDAuMikgIWRlZmF1bHQ7XG5cbi8vLyBCb3ggc2hhZG93IHVuZGVyIHRodW1ibmFpbCBpbWFnZXMuXG4vLy8gQHR5cGUgU2hhZG93XG4kdGh1bWJuYWlsLXNoYWRvdy1ob3ZlcjogMCAwIDZweCAxcHggcmdiYSgkcHJpbWFyeS1jb2xvciwgMC41KSAhZGVmYXVsdDtcblxuLy8vIFRyYW5zaXRpb24gcHJvcHJ0aWVzIGZvciB0aHVtYm5haWwgaW1hZ2VzLlxuLy8vIEB0eXBlIFRyYW5zaXRpb25cbiR0aHVtYm5haWwtdHJhbnNpdGlvbjogYm94LXNoYWRvdyAyMDBtcyBlYXNlLW91dCAhZGVmYXVsdDtcblxuLy8vIERlZmF1bHQgcmFkaXVzIGZvciB0aHVtYm5haWwgaW1hZ2VzLlxuLy8vIEB0eXBlIE51bWJlclxuJHRodW1ibmFpbC1yYWRpdXM6ICRnbG9iYWwtcmFkaXVzICFkZWZhdWx0O1xuXG4vLy8gQWRkcyB0aHVtYm5haWwgc3R5bGVzIHRvIGFuIGVsZW1lbnQuXG4udGh1bWJuYWlsIHtcbiAgYm9yZGVyOiAkdGh1bWJuYWlsLWJvcmRlcjtcbiAgYm94LXNoYWRvdzogJHRodW1ibmFpbC1zaGFkb3c7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgbGluZS1oZWlnaHQ6IDA7XG4gIG1heC13aWR0aDogMTAwJTtcbiAgdHJhbnNpdGlvbjogJHRodW1ibmFpbC10cmFuc2l0aW9uO1xuICBib3JkZXItcmFkaXVzOiAkdGh1bWJuYWlsLXJhZGl1cztcbiAgbWFyZ2luLWJvdHRvbTogJHRodW1ibmFpbC1tYXJnaW4tYm90dG9tO1xuXG4gICY6aG92ZXIsXG4gICY6Zm9jdXMge1xuICAgIGJveC1zaGFkb3c6ICR0aHVtYm5haWwtc2hhZG93LWhvdmVyO1xuICB9XG59XG5cbiIsIi8vIEZvdW5kYXRpb24gZm9yIEVtYWlscyBieSBaVVJCXG4vLyB6dXJiLmNvbS9pbmsvXG4vLyBMaWNlbnNlZCB1bmRlciBNSVQgT3BlbiBTb3VyY2VcblxuLy8vL1xuLy8vIEBncm91cCBtZW51XG4vLy8vXG5cbi8vLyBQYWRkaW5nIGluc2lkZSBhIG1lbnUgaXRlbS5cbi8vLyBAdHlwZSBMZW5ndGhcbiRtZW51LWl0ZW0tcGFkZGluZzogMTBweCAhZGVmYXVsdDtcblxuLy8vIFJpZ2h0LWhhbmQgc3BhY2luZyBvZiBpdGVtcyBpbiBtZW51cyB3aXRoIHRoZSBgLnNpbXBsZWAgY2xhc3MuXG4vLy8gQHR5cGUgTGVuZ3RoXG4kbWVudS1pdGVtLWd1dHRlcjogMTBweCAhZGVmYXVsdDtcblxuLy8vIFRoaXMgaXMgdGhlIGNvbG9yIG9mIHRoZSBtZW51IGl0ZW0gbGlua3MuXG4vLy8gQHR5cGUgQ29sb3JcbiRtZW51LWl0ZW0tY29sb3I6ICRwcmltYXJ5LWNvbG9yICFkZWZhdWx0O1xuXG50YWJsZS5tZW51IHtcbiAgd2lkdGg6ICRnbG9iYWwtd2lkdGg7XG5cbiAgdGQubWVudS1pdGVtLFxuICB0aC5tZW51LWl0ZW0ge1xuICAgIHBhZGRpbmc6ICRtZW51LWl0ZW0tcGFkZGluZztcbiAgICBwYWRkaW5nLXJpZ2h0OiAkbWVudS1pdGVtLWd1dHRlcjtcblxuICAgIGEge1xuICAgICAgY29sb3I6ICRtZW51LWl0ZW0tY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi8vIERvZXNuJ3Qgd29yayBvbiB0aGUgcGVza3kgRVNQcyBsaWtlIG91dGxvb2sgMjAwMFxudGFibGUubWVudS52ZXJ0aWNhbCB7XG4gIHRkLm1lbnUtaXRlbSxcbiAgdGgubWVudS1pdGVtIHtcbiAgICBwYWRkaW5nOiAkbWVudS1pdGVtLXBhZGRpbmc7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBkaXNwbGF5OiBibG9jaztcblxuICAgIGEge1xuICAgICAgd2lkdGg6IDEwMCU7XG4gICAgfVxuICB9XG5cbiAgLy8gTmVzdGVkIGxpc3RzIG5lZWQgc29tZSBtb3JlIHBhZGRpbmcgdG8gdGhlIGxlZnRcbiAgdGQubWVudS1pdGVtLFxuICB0aC5tZW51LWl0ZW0ge1xuICAgIHRhYmxlLm1lbnUudmVydGljYWwge1xuICAgICAgdGQubWVudS1pdGVtLFxuICAgICAgdGgubWVudS1pdGVtIHtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAkbWVudS1pdGVtLXBhZGRpbmc7XG4gICAgICB9XG4gICAgfVxuICB9XG59XG5cbnRhYmxlLm1lbnUudGV4dC1jZW50ZXIgYSB7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbn1cblxuLy9DZW50ZXJzIHRoZSBtZW51cyFcbi5tZW51W2FsaWduPVwiY2VudGVyXCJdIHtcbiAgd2lkdGg6IGF1dG8gIWltcG9ydGFudDtcbn0iLCIvLyBGb3VuZGF0aW9uIGZvciBFbWFpbHMgYnkgWlVSQlxuLy8genVyYi5jb20vaW5rL1xuLy8gTGljZW5zZWQgdW5kZXIgTUlUIE9wZW4gU291cmNlXG5cbi8vLy9cbi8vLyBAZ3JvdXAgb3V0bG9va1xuLy8vL1xuXG5ib2R5Lm91dGxvb2sgcCB7XG4gIGRpc3BsYXk6IGlubGluZSAhaW1wb3J0YW50O1xufVxuIiwiLy8gRm91bmRhdGlvbiBmb3IgRW1haWxzIGJ5IFpVUkJcbi8vIHp1cmIuY29tL2luay9cbi8vIExpY2Vuc2VkIHVuZGVyIE1JVCBPcGVuIFNvdXJjZVxuXG4vLy8vXG4vLy8gQGdyb3VwIG1lZGlhLXF1ZXJ5XG4vLy8vXG5cbkBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogI3skZ2xvYmFsLWJyZWFrcG9pbnR9KSB7XG4gIHRhYmxlLmJvZHkgaW1nIHtcbiAgICB3aWR0aDogYXV0bztcbiAgICBoZWlnaHQ6IGF1dG87XG4gIH1cblxuICB0YWJsZS5ib2R5IGNlbnRlciB7XG4gICAgbWluLXdpZHRoOiAwICFpbXBvcnRhbnQ7XG4gIH1cblxuICB0YWJsZS5ib2R5IC5jb250YWluZXIge1xuICAgIHdpZHRoOiAkZ2xvYmFsLXdpZHRoLXNtYWxsICFpbXBvcnRhbnQ7XG4gIH1cblxuICAvL0lmIGl0IHN1cHBvcnRzIGJvcmRlci1ib3gsIHdoeSBub3Q/IEFtIEkgcmlnaHQ/XG4gIC8vQWxzbywgYnkgZGVmYXVsdCBwYWQgdGhhdCB0byB0aGUgZ2xvYmFsLWd1dHRlciB2YXJpYWJsZVxuICB0YWJsZS5ib2R5IC5jb2x1bW5zLFxuICB0YWJsZS5ib2R5IC5jb2x1bW4ge1xuICAgIGhlaWdodDogYXV0byAhaW1wb3J0YW50O1xuICAgIC1tb3otYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICAtd2Via2l0LWJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gICAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICBwYWRkaW5nLWxlZnQ6ICRnbG9iYWwtZ3V0dGVyICFpbXBvcnRhbnQ7XG4gICAgcGFkZGluZy1yaWdodDogJGdsb2JhbC1ndXR0ZXIgIWltcG9ydGFudDtcblxuICAgIC8vIE5lc3RlZCBjb2x1bW5zIHdvbid0IGRvdWJsZSB0aGUgcGFkZGluZ1xuICAgIC5jb2x1bW4sXG4gICAgLmNvbHVtbnMge1xuICAgICAgcGFkZGluZy1sZWZ0OiAwICFpbXBvcnRhbnQ7XG4gICAgICBwYWRkaW5nLXJpZ2h0OiAwICFpbXBvcnRhbnQ7XG4gICAgfVxuICB9XG5cbiAgLy8gQ29sbHBhc2VkIGNvbHVtbnMgaGF2ZSBubyBndXR0ZXIuXG4gIC5jb2xsYXBzZSB7XG4gICAgdGFibGUuYm9keSAmIC5jb2x1bW5zLFxuICAgIHRhYmxlLmJvZHkgJiAuY29sdW1uIHtcbiAgICAgIHBhZGRpbmctbGVmdDogMCAhaW1wb3J0YW50O1xuICAgICAgcGFkZGluZy1yaWdodDogMCAhaW1wb3J0YW50O1xuICAgIH1cbiAgfVxuXG4gIC8vIEJhc2ljIGdyaWQgcnVsZXNcbiAgQGZvciAkaSBmcm9tIDEgdGhyb3VnaCAkZ3JpZC1jb2x1bW4tY291bnQge1xuICAgIHRkLnNtYWxsLSN7JGl9LFxuICAgIHRoLnNtYWxsLSN7JGl9IHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jayAhaW1wb3J0YW50O1xuICAgICAgd2lkdGg6IC16Zi1ncmlkLWNhbGMtcGN0KCRpLCAkZ3JpZC1jb2x1bW4tY291bnQpICFpbXBvcnRhbnQ7XG4gICAgfVxuICB9XG5cbiAgLy9JZiBpdCdzIHRoZSBsYXN0IGNvbHVtbiBpbiBjb2x1bW4gY291bnQgKDEyIGJ5IGRlZmF1bHQpLFxuICAvL2dpdmUgaXQgYmxvY2sgYW5kIDEwMCUgd2lkdGggdG8ga25vY2sgZG93biB0aGUgd2ltcHkgY29sdW1ucyB0byB0aGVpciBvd24gcm93LlxuICAuY29sdW1ucyB0ZC5zbWFsbC0jeyRncmlkLWNvbHVtbi1jb3VudH0sXG4gIC5jb2x1bW4gdGQuc21hbGwtI3skZ3JpZC1jb2x1bW4tY291bnR9LFxuICAuY29sdW1ucyB0aC5zbWFsbC0jeyRncmlkLWNvbHVtbi1jb3VudH0sXG4gIC5jb2x1bW4gdGguc21hbGwtI3skZ3JpZC1jb2x1bW4tY291bnR9IHtcbiAgICBkaXNwbGF5OiBibG9jayAhaW1wb3J0YW50O1xuICAgIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG4gIH1cblxuICBAZm9yICRpIGZyb20gMSB0aHJvdWdoICgkZ3JpZC1jb2x1bW4tY291bnQgLSAxKSB7XG4gICAgdGFibGUuYm9keSB0ZC5zbWFsbC1vZmZzZXQtI3skaX0sXG4gICAgdGFibGUuYm9keSB0aC5zbWFsbC1vZmZzZXQtI3skaX0ge1xuICAgICAgLy8xLjUgdGFrZXMgaW4gZWZmZWN0IGEgd2hvbGUgZW1wdHkgY2VsbC5cbiAgICAgIG1hcmdpbi1sZWZ0OiAtemYtZ3JpZC1jYWxjLXBjdCgkaSwgJGdyaWQtY29sdW1uLWNvdW50KSAhaW1wb3J0YW50O1xuICAgICAgTWFyZ2luLWxlZnQ6IC16Zi1ncmlkLWNhbGMtcGN0KCRpLCAkZ3JpZC1jb2x1bW4tY291bnQpICFpbXBvcnRhbnQ7XG4gICAgfVxuICB9XG5cbiAgdGFibGUuYm9keSB0YWJsZS5jb2x1bW5zIHRkLmV4cGFuZGVyLFxuICB0YWJsZS5ib2R5IHRhYmxlLmNvbHVtbnMgdGguZXhwYW5kZXIge1xuICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDtcbiAgfVxuXG4gIHRhYmxlLmJvZHkgLnJpZ2h0LXRleHQtcGFkLFxuICB0YWJsZS5ib2R5IC50ZXh0LXBhZC1yaWdodCB7XG4gICAgcGFkZGluZy1sZWZ0OiAkdGV4dC1wYWRkaW5nICFpbXBvcnRhbnQ7XG4gIH1cblxuICB0YWJsZS5ib2R5IC5sZWZ0LXRleHQtcGFkLFxuICB0YWJsZS5ib2R5IC50ZXh0LXBhZC1sZWZ0IHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAkdGV4dC1wYWRkaW5nICFpbXBvcnRhbnQ7XG4gIH1cblxuICAvL21lbnVcbiAgdGFibGUubWVudSB7XG4gICAgd2lkdGg6IDEwMCUgIWltcG9ydGFudDtcblxuICAgIHRkLFxuICAgIHRoIHtcbiAgICAgIHdpZHRoOiBhdXRvICFpbXBvcnRhbnQ7XG4gICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2sgIWltcG9ydGFudDtcbiAgICB9XG5cbiAgICAmLnZlcnRpY2FsLFxuICAgICYuc21hbGwtdmVydGljYWwge1xuICAgICAgdGQsXG4gICAgICB0aCB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG4gICAgICB9XG4gICAgfVxuICB9XG5cbiAgLy8gQ2VudGVycyB0aGUgbWVudXMhXG4gIHRhYmxlLm1lbnVbYWxpZ249XCJjZW50ZXJcIl0ge1xuICAgIHdpZHRoOiBhdXRvICFpbXBvcnRhbnQ7XG4gIH1cblxuICAvLyBleHBhbmRzIGJ1dHRvbnMgZm9yIHNtYWxsIG9ubHlcbiAgdGFibGUuYnV0dG9uLnNtYWxsLWV4cGFuZCxcbiAgdGFibGUuYnV0dG9uLnNtYWxsLWV4cGFuZGVkIHtcbiAgICB3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuXG4gICAgdGFibGUge1xuICAgICAgd2lkdGg6IDEwMCU7XG5cbiAgICAgIGEge1xuICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXIgIWltcG9ydGFudDtcbiAgICAgICAgd2lkdGg6IDEwMCUgIWltcG9ydGFudDtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAwICFpbXBvcnRhbnQ7XG4gICAgICAgIHBhZGRpbmctcmlnaHQ6IDAgIWltcG9ydGFudDtcbiAgICAgIH1cbiAgICB9XG5cbiAgICBjZW50ZXIge1xuICAgICAgbWluLXdpZHRoOiAwO1xuICAgIH1cbiAgfVxufVxuXG4iLCIvLyBUaGVzZSBhcmUgdGhlIHN0eWxlcyB0byBtYWtlIHNvbWUgb2YgdGhlIHRlbXBsYXRlcyBsb29rIGV4dHJhIG5pY2UuXG4vLyBGZWVsIGZyZWUgdG8gcmVtb3ZlIHRoZXNlIHN0eWxlcyBmb3IgcHJvZHVjdGlvbiFcblxuLy8gQm9keSBTdHlsZXMgXG5ib2R5LFxuaHRtbCwgXG4uYm9keSB7XG4gIGJhY2tncm91bmQ6ICNmM2YzZjMgIWltcG9ydGFudDtcbn1cblxuLmNvbnRhaW5lci5oZWFkZXIge1xuICBiYWNrZ3JvdW5kOiAjZjNmM2YzO1xufVxuXG4uYm9keS1kcmlwIHtcbiAgYm9yZGVyLXRvcDogOHB4IHNvbGlkICM2NjMzOTk7XG59XG5cbi8vIEZ1bGwgV2lkdGggSGVhZGVyc1xuLmhlYWRlciB7XG4gIGJhY2tncm91bmQ6ICM4YThhOGE7XG59XG5cbi5oZWFkZXIgLmNvbHVtbnMge1xuICBwYWRkaW5nLWJvdHRvbTogMDtcbn1cblxuLmhlYWRlciBwIHtcbiAgY29sb3I6ICNmZmY7XG4gIHBhZGRpbmctdG9wOiAxNXB4O1xufVxuXG4uaGVhZGVyIC53cmFwcGVyLWlubmVyIHtcbiAgcGFkZGluZzogMjBweDtcbn1cblxuLmhlYWRlciAuY29udGFpbmVyIHtcbiAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7XG59XG5cbi8vIFNvY2lhbCBNZWRpYVxudGFibGUuYnV0dG9uLmZhY2Vib29rIHRhYmxlIHRkIHtcbiAgYmFja2dyb3VuZDogIzNCNTk5OCAhaW1wb3J0YW50O1xuICBib3JkZXItY29sb3I6ICMzQjU5OTg7XG59XG5cbnRhYmxlLmJ1dHRvbi50d2l0dGVyIHRhYmxlIHRkIHtcbiAgYmFja2dyb3VuZDogIzFkYWNlZCAhaW1wb3J0YW50O1xuICBib3JkZXItY29sb3I6ICMxZGFjZWQ7XG59XG5cbnRhYmxlLmJ1dHRvbi5nb29nbGUgdGFibGUgdGQge1xuICBiYWNrZ3JvdW5kOiAjREI0QTM5ICFpbXBvcnRhbnQ7XG4gIGJvcmRlci1jb2xvcjogI0RCNEEzOTtcbn1cblxuLndyYXBwZXIuc2Vjb25kYXJ5IHtcbiAgYmFja2dyb3VuZDogI2YzZjNmMztcbn0iXSwibWFwcGluZ3MiOiJBSTRGQSxRQUFRLENBQUM7RUFDUCxLQUFLLEVBQUUsSUFBSyxHQUNiOztBQ3BGRCxRQUFRLENBQUMsQ0FBQyxDQUFDO0VB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 */

</style>

