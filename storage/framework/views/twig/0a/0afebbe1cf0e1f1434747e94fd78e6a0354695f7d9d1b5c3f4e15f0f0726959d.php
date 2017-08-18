<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/3816f79a1e3fa1d10a139ff0ae8be005.twig */
class __TwigTemplate_295025fba57ea327278a3d32c02d2d56e3ae28aa2fa2151d54aceb811f2e98ac extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
/*.variant-#{\$index}}-logo .st0, */
#main {
  overflow: hidden;
  padding-top: 70px;
  margin-left: 240px;
  background-size: 55px 100px;
  background-repeat: no-repeat;
  transition: min-height 100ms;
  background-position: center 40vh;
  background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('img')->getCallable(), array("theme::img/watermark.svg")), "path", array()), "html", null, true);
        echo "'); }

@media (max-width: 991px) {
  #main {
    margin-left: 0; } }

#menu {
  top: 70px;
  bottom: 0;
  left: 70px;
  width: 170px;
  height: 100%;
  z-index: 101;
  margin-top: 0;
  position: fixed;
  overflow-x: scroll;
  background: #333;
  padding-bottom: 70px;
  box-shadow: 2px 0 0 rgba(66, 66, 66, 0.1); }
  #menu > ul {
    padding: 0;
    margin-bottom: 70px; }
    #menu > ul > li {
      width: 100%; }
      #menu > ul > li > a {
        height: 100%;
        display: block;
        font-size: 18px;
        padding: 0 10px;
        margin: 8px 10px;
        line-height: 39px;
        position: relative;
        white-space: nowrap;
        color: rgba(255, 255, 255, 0.3); }
        #menu > ul > li > a span {
          margin-left: 7px; }
        #menu > ul > li > a:hover {
          color: #eee; }
      #menu > ul > li.active > a, #menu > ul > li.highlighted > a {
        color: #eee; }
      #menu > ul > li.section-label span {
        font-size: 10px;
        margin-bottom: 0;
        padding-bottom: 0;
        line-height: 2rem;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.15);
        text-shadow: 1px 1px rgba(0, 0, 0, 0.1); }
        #menu > ul > li.section-label span:hover {
          color: rgba(255, 255, 255, 0.15); }
      #menu > ul > li ul {
        list-style: none;
        padding-left: 0.5rem;
        margin-left: 1.25rem;
        border-left: 1px solid rgba(255, 255, 255, 0.065); }
        #menu > ul > li ul li a {
          color: rgba(255, 255, 255, 0.3); }
          #menu > ul > li ul li a:hover {
            color: #eee; }
        #menu > ul > li ul li.active > a {
          color: #eee; }

@media (max-width: 991px) {
  #menu {
    width: 0; }
    body.expand #menu {
      left: 240px !important;
      width: 240px !important; } }

@media (max-width: 767px) {
  body.expand #menu {
    left: 50% !important;
    width: 50% !important; } }

#footer {
  padding: 1em 3em;
  overflow: hidden;
  margin-left: 240px;
  background: #fff; }
  #footer ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline-block; }
    #footer ul.meta {
      margin-top: 8px; }
    #footer ul.extra {
      float: right; }
    #footer ul li {
      color: #b5bcc0;
      display: inline-block;
      font-size: 0.875rem; }
      #footer ul li:not(:last-child) {
        margin-right: 0.75em; }
      #footer ul li.logo {
        margin-right: 1em; }
        #footer ul li.logo img {
          height: 2em;
          margin-top: -0.5em;
          display: inline-block; }
      #footer ul li.footprint span {
        color: #c2c9cc; }

@media (max-width: 991px) {
  #footer {
    margin-left: 0; }
    #footer ul {
      display: block; }
      #footer ul.extra {
        margin-top: 1rem;
        float: none !important; }
        #footer ul.extra li {
          width: 100%;
          margin-top: 0.5rem !important; }
          #footer ul.extra li select, #footer ul.extra li .btn {
            width: 100%;
            display: block; } }

@media (max-width: 767px) {
  #footer ul li {
    width: 100%; } }

#topbar {
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  position: fixed;
  background: #fff;
  box-shadow: 1px 0 3px 0 rgba(0, 0, 0, 0.2); }
  #topbar .topbar-left {
    z-index: 1;
    float: left;
    width: 70px;
    height: 70px;
    position: relative;
    text-align: center;
    background-color: #f5f5f5; }
  #topbar .logo {
    font-size: 17px;
    font-weight: bold;
    line-height: 70px;
    letter-spacing: 0.05em;
    color: #212121 !important;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif; }
    #topbar .logo span {
      display: none; }
    #topbar .logo svg {
      width: 22px;
      height: 40px;
      margin-top: -9px;
      vertical-align: middle; }
      #topbar .logo svg .st0 {
        transition: fill 300ms 500ms; }
    #topbar .logo small {
      font-size: 10px;
      font-weight: normal;
      color: rgba(0, 0, 0, 0.2); }
  #topbar .button-menu {
    float: left; }
    #topbar .button-menu .button-menu-mobile {
      border: none;
      color: #888;
      cursor: pointer;
      font-size: 21px;
      padding: 0 15px;
      line-height: 70px;
      background: transparent; }
  #topbar .navbar-form {
    float: left;
    border: none;
    box-shadow: none; }
    #topbar .navbar-form .form-group {
      margin: 0;
      height: 70px;
      display: inline-block; }
  #topbar .btn-search {
    display: none; }
  #topbar .navbar-default {
    padding: 0;
    border: none;
    border-radius: 0;
    margin-bottom: 0;
    background-color: #fff; }
    #topbar .navbar-default .navbar-nav {
      float: right; }
  #topbar .nav > li {
    margin-left: 0; }
    #topbar .nav > li > a {
      padding: 0 15px;
      line-height: 70px;
      position: relative;
      color: #888 !important; }
  #topbar .dropdown-menu {
    margin: 0;
    z-index: 998;
    min-width: 10rem;
    max-height: 70vh;
    border-top: none;
    overflow-y: auto;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    box-shadow: inset 0 3px 3px -3px rgba(0, 0, 0, 0.2); }
    #topbar .dropdown-menu .dropdown-item {
      display: block; }
    #topbar .dropdown-menu .dropdown-item i {
      color: #a8a8a8;
      margin-right: 0.4rem; }
    #topbar .dropdown-menu .dropdown-item a {
      display: block; }
    #topbar .dropdown-menu .notification-title {
      color: #000;
      font-size: 16px;
      font-weight: 400;
      text-align: center;
      padding: 5px 0 10px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1); }
    #topbar .dropdown-menu .list-group {
      margin-bottom: 0; }
    #topbar .dropdown-menu .list-group .list-group-item {
      border: none;
      border-radius: 0;
      padding: 10px 20px; }
      #topbar .dropdown-menu .list-group .list-group-item:last-child {
        text-align: center; }

body.expand #topbar .topbar-left {
  width: 240px !important; }
  body.expand #topbar .topbar-left .logo span {
    margin-left: 4px;
    display: inline-block; }

@media (max-width: 767px) {
  #topbar .dropdown-menu {
    top: 70px;
    position: fixed;
    max-height: calc(100vh - 85px);
    left: 15px;
    right: 15px; }
    body.expand #topbar .topbar-left {
      width: 50% !important; } }

#search .search-bar {
  height: 70px;
  color: #212121;
  font-size: 14px;
  border: none !important;
  box-shadow: none !important;
  background-color: transparent !important; }
  #search .results {
    min-width: 15rem; }

@media (max-width: 767px) {
  body.expand #search {
    display: none; } }

#buttons {
  margin-bottom: 1.5rem; }

@media (max-width: 767px) {
  #buttons .btn {
    display: block;
    margin-top: 0.5rem; } }

#sidebar {
  top: 70px;
  bottom: 0;
  width: 70px;
  height: 100%;
  z-index: 103;
  margin-top: 0;
  position: fixed;
  overflow-x: scroll;
  overflow-y: hidden;
  background: #252525;
  padding-bottom: 70px;
  -webkit-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  -moz-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  -o-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1); }
  #sidebar > ul {
    padding: 0;
    margin-bottom: 70px; }
  #sidebar > ul > li {
    width: 100%; }
  #sidebar > ul > li > a {
    height: 100%;
    margin: 8px 0;
    display: block;
    padding: 0 10px;
    font-size: 18px;
    line-height: 39px;
    position: relative;
    text-align: center;
    white-space: nowrap;
    color: rgba(255, 255, 255, 0.3); }
    #sidebar > ul > li > a .icon {
      width: 1.25rem;
      text-align: center;
      display: inline-block; }
    #sidebar > ul > li > a .title {
      display: none;
      margin-left: 8px; }
    #sidebar > ul > li > a i {
      width: 1.25rem; }
    #sidebar > ul > li > a svg {
      width: auto;
      height: auto;
      max-width: 1.25rem;
      max-height: 1.25rem;
      vertical-align: middle; }
    #sidebar > ul > li > a svg path {
      fill: rgba(255, 255, 255, 0.3); }
    #sidebar > ul > li > a:hover {
      color: #eee; }
    #sidebar > ul > li > a:hover svg path {
      fill: #eee; }
  #sidebar > ul > li.dragged {
    opacity: 0.3; }
  #sidebar > ul > li.placeholder {
    display: none; }
  #sidebar > ul > li.active {
    background: #333;
    box-sizing: border-box;
    border-left: 3px solid #fff; }
    #sidebar > ul > li.active a {
      color: #eee;
      margin-left: -3px; }
    #sidebar > ul > li.active a svg path {
      fill: #eee; }
  #sidebar.open, #sidebar.hover:hover {
    width: 240px !important; }
  #sidebar.open a, #sidebar.hover:hover a {
    text-align: left;
    padding-left: 20px; }
  #sidebar.open a .title, #sidebar.hover:hover a .title {
    display: inline-block; }

@media (max-width: 991px) {
  #sidebar {
    width: 0;
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none; } }

@media (max-width: 767px) {
  #sidebar.open, #sidebar.hover:hover {
    width: 50% !important; } }

.tag {
  border-radius: 0.1rem; }

.nav.nav-sections {
  margin-bottom: 1em;
  background-color: #e1e2e3; }
  .nav.nav-sections li {
    text-align: center;
    display: inline-block; }
  .nav.nav-sections li a {
    color: #858b8f;
    display: block;
    padding: 0.5em 2em; }
  .nav.nav-sections li.active a {
    color: #55595c;
    background: #fff; }
  .nav.nav-sections.nav-stacked {
    float: left;
    width: 200px;
    margin-bottom: 0; }
  .nav.nav-sections.nav-stacked .nav-item {
    display: block;
    text-align: left; }
    .nav.nav-sections.nav-stacked .nav-item .nav-link {
      padding: 0.5em 1em; }
  .nav.nav-pills .nav-item .nav-link {
    color: #373a3c; }
    .nav.nav-pills .nav-item .nav-link:hover {
      background: #eceeef; }
    .nav.nav-pills .nav-item .nav-link small {
      color: #888; }

.tab-pane:not(.active) {
  display: none; }

.card {
  position: relative;
  margin-bottom: 1.5rem;
  -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  .card.card-container {
    box-shadow: none;
    background: transparent; }
  .card.card-flex {
    display: flex; }
  .card.card-flex .card-block {
    width: 100%; }
  .card .card-header {
    background-color: #fafafa;
    border-bottom: 1px solid rgba(0, 0, 0, .05); }
  .card .card-title {
    margin: 0;
    color: #626262; }
  .card .card-title small {
    color: #888; }

@media (max-width: 767px) {
  .card-block {
    padding: 0.5em; } }

.form .field-group {
  margin-bottom: 2rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #eceeef; }
  .form .field-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none; }
  .form .form-group {
    margin-bottom: 0; }
  .form .form-group.has-info .c-checkbox, .form .form-group.has-info .c-radio {
    color: #11bef6; }
  .form .form-group.has-danger .c-checkbox, .form .form-group.has-danger .c-radio {
    color: #ff3160; }
  .form .form-group.has-success .c-checkbox, .form .form-group.has-success .c-radio {
    color: #47d165; }
  .form .form-group.has-warning .c-checkbox, .form .form-group.has-warning .c-radio {
    color: #ff754b; }
  .form .controls .actions {
    display: inline-block; }
  .form .controls .buttons {
    float: right; }
  .form .controls.affix {
    bottom: 0;
    position: fixed;
    margin-bottom: 0;
    z-index: 950;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0; }
  .form .controls.affix:before {
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    content: '';
    position: absolute;
    box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.25); }
  .form .controls.affix:after {
    top: 1px;
    left: 0;
    right: 0;
    height: 1px;
    content: '';
    position: absolute;
    background: #fff; }
  .form label.control-label {
    font-weight: bold; }
  .form label .required {
    color: #ff3160; }

.form-control {
  border-radius: 0.17rem; }

@media (max-width: 767px) {
  .form .controls .actions, .form .controls .buttons {
    float: none;
    display: block; }
    .form .controls .btn, .form .controls .btn-group {
      width: 100%;
      display: block;
      margin-top: 0.5rem; } }

ul.tree {
  padding-left: 0;
  list-style: none; }
  ul.tree ul, ul.tree ol {
    list-style: none; }
  ul.tree li .card {
    padding-right: 4px;
    margin-bottom: 7px;
    background-color: #fff;
    border: 2px solid transparent;
    border-radius: 0.17rem;
    -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
    -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
    box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  ul.tree li .card .handle {
    cursor: move;
    padding: 6px 9px;
    box-shadow: none;
    background: #eceeef;
    color: rgba(0, 0, 0, 0.2);
    border-radius: 0.1rem; }
  ul.tree li .card .buttons {
    float: right;
    display: none; }
  ul.tree li .card > span {
    margin-left: 6px; }
  ul.tree li .card:hover > .buttons {
    display: block; }
  ul.tree li.dragged {
    opacity: 0.5;
    position: absolute;
    margin-bottom: 1.5; }
  ul.tree li.placeholder {
    height: 30px;
    margin-bottom: 9px;
    border: 2px dashed #888;
    border-radius: 0.17rem; }
  ul.tree li.collapsed > .card {
    position: relative; }
    ul.tree li.collapsed > .card > .handle {
      color: #fff;
      background: #11bef6; }
    ul.tree li.collapsed > .card > .count {
      top: -7px;
      left: -7px;
      width: 14px;
      height: 14px;
      color: #fff;
      font-size: 9px;
      cursor: default;
      font-weight: bold;
      line-height: 14px;
      text-align: center;
      border-radius: 50%;
      position: absolute;
      background: #ff3160;
      -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
      -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
      box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  ul.tree li.collapsed > ul {
    display: none; }

@media (max-width: 767px) {
  ul.tree li .card .buttons {
    display: block; }
    ul.tree li .card .buttons a {
      font-size: 0; }
      ul.tree li .card .buttons a .fa {
        font-size: 18px !important; } }

@media (max-width: 375px) {
  ul.tree li .card .buttons {
    display: block;
    border-left: 1em solid transparent;
    border-right: 1em solid transparent;
    border-top: 1em solid #38b5e6;
    margin-top: 0.275em; }
    ul.tree li .card .buttons a {
      display: none; }
      ul.tree li .card .buttons a .fa {
        font-size: 18px !important; }
    ul.tree li .card .buttons:hover, ul.tree li .card .buttons:focus {
      position: fixed;
      bottom: 0;
      background-color: #3e3e3e !important;
      border: none;
      display: block;
      width: 100%;
      z-index: 500;
      padding-top: 0.75em;
      padding-left: 0.75em;
      padding-right: 0.75em;
      padding-bottom: 0.75em;
      margin-left: -1.1em; }
      ul.tree li .card .buttons:hover a, ul.tree li .card .buttons:focus a {
        display: inline-block; } }

.alert {
  -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  .alert p {
    margin-bottom: 0; }

.table {
  margin-bottom: 0; }
  .table th, .table td {
    vertical-align: middle; }
  .table th h1:last-of-type, .table td h1:last-of-type, .table th h2:last-of-type, .table td h2:last-of-type, .table th h3:last-of-type, .table td h3:last-of-type, .table th h4:last-of-type, .table td h4:last-of-type, .table th h5:last-of-type, .table td h5:last-of-type {
    margin-bottom: 0; }
  .table > thead > tr.dragged, .table > tbody > tr.dragged, .table > tfoot > tr.dragged {
    opacity: 0.2; }
  .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    vertical-align: middle; }
    .table > thead > tr > th .handle:hover, .table > tbody > tr > th .handle:hover, .table > tfoot > tr > th .handle:hover, .table > thead > tr > td .handle:hover, .table > tbody > tr > td .handle:hover, .table > tfoot > tr > td .handle:hover {
      cursor: move; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #eceeef; }
  .table thead th a {
    color: #373a3c; }

.table-filters {
  padding: 1rem;
  border-top: 1px solid #eceeef; }
  .table-filters .form-group {
    margin-bottom: 0 !important; }

.no-results {
  padding: 1rem;
  border-top: 1px solid #eceeef; }

body.modal-open {
  overflow: visible; }

.modal {
  overflow: hidden; }
  .modal.fade .modal-dialog {
    transition: transform 0.3s ease-out; }
  .modal .close {
    margin-top: 4px;
    margin-right: 4px;
    color: rgba(0, 0, 0, 0.5); }
  .modal .modal-content {
    min-height: 100px;
    border-radius: 0.1rem; }

.modal-loading {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 99999;
  position: absolute;
  background: rgba(255, 255, 255, 0.5); }
  .modal-loading .loader {
    margin-top: 0.7rem; }

.modal-wide {
  max-width: unset; }

.modal-dialog.modal-wide {
  width: auto;
  margin: 30px; }

.modal-filter {
  margin-bottom: 1rem; }

.modal-title {
  padding-right: 3rem; }
/*!
 * # Semantic UI 1.12.2 - Loader
 * http://github.com/semantic-org/semantic-ui/
 *
 *
 * Copyright 2014 Contributors
 * Released under the MIT license
 * http://opensource.org/licenses/MIT
 *
 */
/*******************************
 Loader
 *******************************/
/* Standard Size */
.loader {
  top: 50%;
  left: 50%;
  margin: 0;
  z-index: 1000;
  display: none;
  position: absolute;
  text-align: center;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%); }
/* Static Shape */
.loader:before {
  position: absolute;
  content: '';
  top: 0%;
  left: 50%;
  width: 100%;
  height: 100%;
  border-radius: 500rem;
  border: 0.1em solid rgba(0, 0, 0, 0.1); }
/* Active Shape */
.loader:after {
  position: absolute;
  content: '';
  top: 0%;
  left: 50%;
  width: 100%;
  height: 100%;
  -webkit-animation: loader 0.6s linear;
  animation: loader 0.6s linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  border-radius: 500rem;
  border-color: #aaa transparent transparent;
  border-style: solid;
  border-width: 0.1em;
  box-shadow: 0px 0px 0px 1px transparent; }
/* Active Animation */
@-webkit-keyframes loader {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }

  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loader {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }

  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }
/* Sizes */
.loader:before, .loader:after {
  width: 2.2585em;
  height: 2.2585em;
  margin: 0em 0em 0em -1.12925em; }

.mini.loader:before, .mini.loader:after {
  width: 1.2857em;
  height: 1.2857em;
  margin: 0em 0em 0em -0.64285em; }

.small.loader:before, .small.loader:after {
  width: 1.7142em;
  height: 1.7142em;
  margin: 0em 0em 0em -0.8571em; }

.large.loader:before, .large.loader:after {
  width: 3.5714em;
  height: 3.5714em;
  margin: 0em 0em 0em -1.7857em; }
/*-------------------
 Coupling
 --------------------*/
/* White Dimmer (Inverted) */
.inverted.dimmer .loader {
  color: rgba(0, 0, 0, 0.8); }

.inverted.dimmer .loader:before {
  border-color: rgba(0, 0, 0, 0.1); }

.inverted.dimmer .loader:after {
  border-color: #aaa transparent transparent; }
/*******************************
 Types
 *******************************/
/*-------------------
 Text
 --------------------*/
.text.loader {
  width: auto !important;
  height: auto !important;
  text-align: center;
  font-style: normal; }
/*******************************
 States
 *******************************/
.indeterminate.loader:after {
  -webkit-animation-direction: reverse;
  animation-direction: reverse;
  -webkit-animation-duration: 1.2s;
  animation-duration: 1.2s; }

.loader.active, .loader.visible {
  display: block; }

.loader.disabled, .loader.hidden {
  display: none; }
/*******************************
 Variations
 *******************************/
/*-------------------
 Sizes
 --------------------*/
/* Loader */
.inverted.dimmer .mini.loader, .mini.loader {
  width: 1.2857em;
  height: 1.2857em;
  font-size: 0.7857em; }

.inverted.dimmer .small.loader, .small.loader {
  width: 1.7142em;
  height: 1.7142em;
  font-size: 0.9285em; }

.inverted.dimmer .loader, .loader {
  width: 2.2585em;
  height: 2.2585em;
  font-size: 1em; }

.inverted.dimmer .loader.large, .loader.large {
  width: 4.5714em;
  height: 4.5714em;
  font-size: 1.1428em; }
/* Text Loader */
.mini.text.loader {
  min-width: 1.2857em;
  padding-top: 1.9857em; }

.small.text.loader {
  min-width: 1.7142em;
  padding-top: 2.4142em; }

.text.loader {
  min-width: 2.2585em;
  padding-top: 2.9585em; }

.large.text.loader {
  min-width: 4.5714em;
  padding-top: 5.2714em; }
/*-------------------
 Inverted
 --------------------*/
.inverted.loader {
  color: #fff; }

.inverted.loader:before {
  border-color: rgba(255, 255, 255, 0.15); }

.inverted.loader:after {
  border-top-color: #fff; }
/*-------------------
 Inline
 --------------------*/
.inline.loader {
  position: relative;
  vertical-align: middle;
  margin: 0em;
  left: 0em;
  top: 0em;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none; }

.inline.loader.active, .inline.loader.visible {
  display: inline-block; }
/* Centered Inline */
.centered.inline.loader.active, .centered.inline.loader.visible {
  display: block; }

.btn {
  transition: all 100ms;
  /**
   * Additional Sizes
   */
  /**
   * Rounded Buttons
   */ }
  .btn.btn-xs {
    font-size: 0.75rem;
    padding: 0.25rem 0.33333rem; }
  .btn.btn-rounded {
    border-radius: 2rem; }
/**
 * Additional Variations
 */
.btn-default {
  color: #252525 !important;
  background-color: #d4d6d7;
  border-color: #d4d6d7; }
  .btn-default:hover {
    color: #252525 !important;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-default:focus, .btn-default.focus {
    color: #252525 !important;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-default:active, .btn-default.active, .open > .btn-default.dropdown-toggle {
    color: #252525 !important;
    background-color: #babdbe;
    border-color: #b4b8ba;
    background-image: none; }
  .btn-default:active:hover, .btn-default.active:hover, .open > .btn-default.dropdown-toggle:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .btn-default.dropdown-toggle:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .btn-default.dropdown-toggle.focus {
    color: #252525 !important;
    background-color: #a7abad;
    border-color: #92979a; }
  .btn-default.disabled:focus, .btn-default:disabled:focus, .btn-default.disabled.focus, .btn-default:disabled.focus {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }
  .btn-default.disabled:hover, .btn-default:disabled:hover {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }

.btn-inverse {
  color: #fff;
  background-color: #d4d6d7;
  border-color: #d4d6d7; }
  .btn-inverse.btn-outline {
    color: #d4d6d7;
    border-color: #d4d6d7;
    background-color: transparent; }
  .btn-inverse:hover {
    color: #fff;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-inverse:focus, .btn-inverse.focus {
    color: #fff;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-inverse:active, .btn-inverse.active, .open > .btn-inverse.dropdown-toggle {
    color: #fff;
    background-color: #babdbe;
    border-color: #b4b8ba;
    background-image: none; }
  .btn-inverse:active:hover, .btn-inverse.active:hover, .open > .btn-inverse.dropdown-toggle:hover, .btn-inverse:active:focus, .btn-inverse.active:focus, .open > .btn-inverse.dropdown-toggle:focus, .btn-inverse:active.focus, .btn-inverse.active.focus, .open > .btn-inverse.dropdown-toggle.focus {
    color: #fff;
    background-color: #a7abad;
    border-color: #92979a; }
  .btn-inverse.disabled:focus, .btn-inverse:disabled:focus, .btn-inverse.disabled.focus, .btn-inverse:disabled.focus {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }
  .btn-inverse.disabled:hover, .btn-inverse:disabled:hover {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }

.btn-white {
  color: #333;
  background-color: #fff;
  border-color: #fff; }
  .btn-white.btn-outline {
    color: #fff;
    border-color: #fff;
    background-color: transparent; }
  .btn-white.btn-outline:focus, .btn-white.btn-outline:active, .btn-white.btn-outline:hover {
    color: #fff !important;
    border-color: #fff !important;
    background-color: transparent !important; }
  .btn-white:hover {
    color: #333;
    background-color: #e6e6e6;
    border-color: #e0e0e0; }
  .btn-white:focus, .btn-white.focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #e0e0e0; }
  .btn-white:active, .btn-white.active, .open > .btn-white.dropdown-toggle {
    color: #333;
    background-color: #e6e6e6;
    border-color: #e0e0e0;
    background-image: none; }
  .btn-white:active:hover, .btn-white.active:hover, .open > .btn-white.dropdown-toggle:hover, .btn-white:active:focus, .btn-white.active:focus, .open > .btn-white.dropdown-toggle:focus, .btn-white:active.focus, .btn-white.active.focus, .open > .btn-white.dropdown-toggle.focus {
    color: #333;
    background-color: #d4d4d4;
    border-color: #bfbfbf; }
  .btn-white.disabled:focus, .btn-white:disabled:focus, .btn-white.disabled.focus, .btn-white:disabled.focus {
    background-color: #fff;
    border-color: #fff; }
  .btn-white.disabled:hover, .btn-white:disabled:hover {
    background-color: #fff;
    border-color: #fff; }
/**
 * Redo all the regular button
 * styles in order to add outline
 * and retain the default hover effect.
 */
.btn-primary {
  color: #fff !important;
  background-color: #b21cc3;
  border-color: #b21cc3; }
  .btn-primary.btn-outline {
    color: #b21cc3;
    border-color: #b21cc3;
    background-color: transparent; }
  .btn-primary.btn-gradient {
    background-image: linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%); }
  .btn-primary:hover {
    color: #fff !important;
    background-color: #891696;
    border-color: #81148d; }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff !important;
    background-color: #891696;
    border-color: #81148d; }
  .btn-primary:active, .btn-primary.active, .open > .btn-primary.dropdown-toggle {
    color: #fff !important;
    background-color: #891696;
    border-color: #81148d;
    background-image: none; }
  .btn-primary:active:hover, .btn-primary.active:hover, .open > .btn-primary.dropdown-toggle:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .btn-primary.dropdown-toggle:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .btn-primary.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #6d1177;
    border-color: #4c0c54; }
  .btn-primary.disabled:focus, .btn-primary:disabled:focus, .btn-primary.disabled.focus, .btn-primary:disabled.focus {
    background-color: #b21cc3;
    border-color: #b21cc3; }
  .btn-primary.disabled:hover, .btn-primary:disabled:hover {
    background-color: #b21cc3;
    border-color: #b21cc3; }

.btn-success {
  color: #fff !important;
  background-color: #47d165;
  border-color: #47d165; }
  .btn-success.btn-outline {
    color: #47d165;
    border-color: #47d165;
    background-color: transparent; }
  .btn-success.btn-gradient {
    background-image: linear-gradient(141deg, #bbee61 0%, #47d165 95%); }
  .btn-success:hover {
    color: #fff !important;
    background-color: #2eb74c;
    border-color: #2caf48; }
  .btn-success:focus, .btn-success.focus {
    color: #fff !important;
    background-color: #2eb74c;
    border-color: #2caf48; }
  .btn-success:active, .btn-success.active, .open > .btn-success.dropdown-toggle {
    color: #fff !important;
    background-color: #2eb74c;
    border-color: #2caf48;
    background-image: none; }
  .btn-success:active:hover, .btn-success.active:hover, .open > .btn-success.dropdown-toggle:hover, .btn-success:active:focus, .btn-success.active:focus, .open > .btn-success.dropdown-toggle:focus, .btn-success:active.focus, .btn-success.active.focus, .open > .btn-success.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #279b40;
    border-color: #1f7a32; }
  .btn-success.disabled:focus, .btn-success:disabled:focus, .btn-success.disabled.focus, .btn-success:disabled.focus {
    background-color: #47d165;
    border-color: #47d165; }
  .btn-success.disabled:hover, .btn-success:disabled:hover {
    background-color: #47d165;
    border-color: #47d165; }

.btn-info {
  color: #fff !important;
  background-color: #11bef6;
  border-color: #11bef6; }
  .btn-info.btn-outline {
    color: #11bef6;
    border-color: #11bef6;
    background-color: transparent; }
  .btn-info.btn-gradient {
    background-image: linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%); }
  .btn-info:hover {
    color: #fff !important;
    background-color: #089ccc;
    border-color: #0795c2; }
  .btn-info:focus, .btn-info.focus {
    color: #fff !important;
    background-color: #089ccc;
    border-color: #0795c2; }
  .btn-info:active, .btn-info.active, .open > .btn-info.dropdown-toggle {
    color: #fff !important;
    background-color: #089ccc;
    border-color: #0795c2;
    background-image: none; }
  .btn-info:active:hover, .btn-info.active:hover, .open > .btn-info.dropdown-toggle:hover, .btn-info:active:focus, .btn-info.active:focus, .open > .btn-info.dropdown-toggle:focus, .btn-info:active.focus, .btn-info.active.focus, .open > .btn-info.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #0682aa;
    border-color: #056483; }
  .btn-info.disabled:focus, .btn-info:disabled:focus, .btn-info.disabled.focus, .btn-info:disabled.focus {
    background-color: #11bef6;
    border-color: #11bef6; }
  .btn-info.disabled:hover, .btn-info:disabled:hover {
    background-color: #11bef6;
    border-color: #11bef6; }

.btn-warning {
  color: #fff !important;
  background-color: #ff754b;
  border-color: #ff754b; }
  .btn-warning.btn-outline {
    color: #ff754b;
    border-color: #ff754b;
    background-color: transparent; }
  .btn-warning:hover {
    color: #fff !important;
    background-color: #ff4e18;
    border-color: #ff460e; }
  .btn-warning:focus, .btn-warning.focus {
    color: #fff !important;
    background-color: #ff4e18;
    border-color: #ff460e; }
  .btn-warning:active, .btn-warning.active, .open > .btn-warning.dropdown-toggle {
    color: #fff !important;
    background-color: #ff4e18;
    border-color: #ff460e;
    background-image: none; }
  .btn-warning:active:hover, .btn-warning.active:hover, .open > .btn-warning.dropdown-toggle:hover, .btn-warning:active:focus, .btn-warning.active:focus, .open > .btn-warning.dropdown-toggle:focus, .btn-warning:active.focus, .btn-warning.active.focus, .open > .btn-warning.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #f33900;
    border-color: #cb2f00; }
  .btn-warning.disabled:focus, .btn-warning:disabled:focus, .btn-warning.disabled.focus, .btn-warning:disabled.focus {
    background-color: #ff754b;
    border-color: #ff754b; }
  .btn-warning.disabled:hover, .btn-warning:disabled:hover {
    background-color: #ff754b;
    border-color: #ff754b; }

.btn-danger {
  color: #fff !important;
  background-color: #ff3160;
  border-color: #ff3160; }
  .btn-danger.btn-outline {
    color: #ff3160;
    border-color: #ff3160;
    background-color: transparent; }
  .btn-danger.btn-gradient {
    background-image: linear-gradient(141deg, #ff754b 0%, #ff3160 75%); }
  .btn-danger:hover {
    color: #fff !important;
    background-color: #fd003a;
    border-color: #f30037; }
  .btn-danger:focus, .btn-danger.focus {
    color: #fff !important;
    background-color: #fd003a;
    border-color: #f30037; }
  .btn-danger:active, .btn-danger.active, .open > .btn-danger.dropdown-toggle {
    color: #fff !important;
    background-color: #fd003a;
    border-color: #f30037;
    background-image: none; }
  .btn-danger:active:hover, .btn-danger.active:hover, .open > .btn-danger.dropdown-toggle:hover, .btn-danger:active:focus, .btn-danger.active:focus, .open > .btn-danger.dropdown-toggle:focus, .btn-danger:active.focus, .btn-danger.active.focus, .open > .btn-danger.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #d90032;
    border-color: #b10028; }
  .btn-danger.disabled:focus, .btn-danger:disabled:focus, .btn-danger.disabled.focus, .btn-danger:disabled.focus {
    background-color: #ff3160;
    border-color: #ff3160; }
  .btn-danger.disabled:hover, .btn-danger:disabled:hover {
    background-color: #ff3160;
    border-color: #ff3160; }

.variant-0 .variant-logo .st0 {
  fill: #8726df !important; }

.variant-0 .variant-border {
  border-color: #8726df !important; }

.variant-0 .variant-color, .variant-0-color {
  color: #8726df !important; }

.variant-0 .variant-background, .variant-0-background {
  background: linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-0 .variant-background-pattern, .variant-0-background-pattern {
  background-image: url('";
        // line 1152
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-1 .variant-logo .st0 {
  fill: #8726df !important; }

.variant-1 .variant-border {
  border-color: #8726df !important; }

.variant-1 .variant-color, .variant-1-color {
  color: #8726df !important; }

.variant-1 .variant-background, .variant-1-background {
  background: linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-1 .variant-background-pattern, .variant-1-background-pattern {
  background-image: url('";
        // line 1167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-2 .variant-logo .st0 {
  fill: #8726df !important; }

.variant-2 .variant-border {
  border-color: #8726df !important; }

.variant-2 .variant-color, .variant-2-color {
  color: #8726df !important; }

.variant-2 .variant-background, .variant-2-background {
  background: linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-2 .variant-background-pattern, .variant-2-background-pattern {
  background-image: url('";
        // line 1182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-3 .variant-logo .st0 {
  fill: #c61db4 !important; }

.variant-3 .variant-border {
  border-color: #c61db4 !important; }

.variant-3 .variant-color, .variant-3-color {
  color: #c61db4 !important; }

.variant-3 .variant-background, .variant-3-background {
  background: linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-3 .variant-background-pattern, .variant-3-background-pattern {
  background-image: url('";
        // line 1197
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-4 .variant-logo .st0 {
  fill: #c61db4 !important; }

.variant-4 .variant-border {
  border-color: #c61db4 !important; }

.variant-4 .variant-color, .variant-4-color {
  color: #c61db4 !important; }

.variant-4 .variant-background, .variant-4-background {
  background: linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-4 .variant-background-pattern, .variant-4-background-pattern {
  background-image: url('";
        // line 1212
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-5 .variant-logo .st0 {
  fill: #c82ecb !important; }

.variant-5 .variant-border {
  border-color: #c82ecb !important; }

.variant-5 .variant-color, .variant-5-color {
  color: #c82ecb !important; }

.variant-5 .variant-background, .variant-5-background {
  background: linear-gradient(141deg, #e3488b 0%, #c82ecb 51%, #b224d7 75%) !important; }

.variant-5 .variant-background-pattern, .variant-5-background-pattern {
  background-image: url('";
        // line 1227
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #e3488b 0%, #c82ecb 51%, #b224d7 75%) !important; }

.variant-6 .variant-logo .st0 {
  fill: #ff3160 !important; }

.variant-6 .variant-border {
  border-color: #ff3160 !important; }

.variant-6 .variant-color, .variant-6-color {
  color: #ff3160 !important; }

.variant-6 .variant-background, .variant-6-background {
  background: linear-gradient(141deg, #ff754b 0%, #ff3160 75%) !important; }

.variant-6 .variant-background-pattern, .variant-6-background-pattern {
  background-image: url('";
        // line 1242
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #ff754b 0%, #ff3160 75%) !important; }

.variant-7 .variant-logo .st0 {
  fill: #8474ec !important; }

.variant-7 .variant-border {
  border-color: #8474ec !important; }

.variant-7 .variant-color, .variant-7-color {
  color: #8474ec !important; }

.variant-7 .variant-background, .variant-7-background {
  background: linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.variant-7 .variant-background-pattern, .variant-7-background-pattern {
  background-image: url('";
        // line 1257
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.variant-8 .variant-logo .st0 {
  fill: #8474ec !important; }

.variant-8 .variant-border {
  border-color: #8474ec !important; }

.variant-8 .variant-color, .variant-8-color {
  color: #8474ec !important; }

.variant-8 .variant-background, .variant-8-background {
  background: linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.variant-8 .variant-background-pattern, .variant-8-background-pattern {
  background-image: url('";
        // line 1272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'), linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.dropdown-toggle-split {
  border-right-color: rgba(0, 0, 0, 0.04); }

.dropdown-toggle::after {
  margin-top: -0.2em; }
/* perfect-scrollbar v0.6.14 */
.ps-container {
  -ms-touch-action: auto;
  touch-action: auto;
  overflow: hidden !important;
  -ms-overflow-style: none; }

@supports (-ms-overflow-style: none) {
  .ps-container {
    overflow: auto !important; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps-container {
    overflow: auto !important; } }

.ps-container.ps-active-x > .ps-scrollbar-x-rail, .ps-container.ps-active-y > .ps-scrollbar-y-rail {
  display: block;
  background-color: transparent; }

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 8px; }

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 8px; }

.ps-container > .ps-scrollbar-x-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
  -o-transition: background-color 0.2s linear, opacity 0.2s linear;
  -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
  transition: background-color 0.2s linear, opacity 0.2s linear;
  bottom: 0px;
  /* there must be 'bottom' for ps-scrollbar-x-rail */
  height: 10px; }

.ps-container > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  -o-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  -moz-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  bottom: 2px;
  /* there must be 'bottom' for ps-scrollbar-x */
  height: 6px; }

.ps-container > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x, .ps-container > .ps-scrollbar-x-rail:active > .ps-scrollbar-x {
  height: 8px; }

.ps-container > .ps-scrollbar-y-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
  -o-transition: background-color 0.2s linear, opacity 0.2s linear;
  -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
  transition: background-color 0.2s linear, opacity 0.2s linear;
  right: 0;
  /* there must be 'right' for ps-scrollbar-y-rail */
  width: 10px; }

.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  -o-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  -moz-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  right: 1px;
  /* there must be 'right' for ps-scrollbar-y */
  width: 3px; }

.ps-container > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y, .ps-container > .ps-scrollbar-y-rail:active > .ps-scrollbar-y {
  width: 8px; }

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 8px; }

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 8px; }

.ps-container:hover > .ps-scrollbar-x-rail, .ps-container:hover > .ps-scrollbar-y-rail {
  opacity: 0.6; }

.ps-container:hover > .ps-scrollbar-x-rail:hover {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
  background-color: #999; }

.ps-container:hover > .ps-scrollbar-y-rail:hover {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
  background-color: #999; }

.close {
  opacity: 1;
  line-height: 18px; }

.text-center {
  text-align: center; }

.hidden {
  display: none; }

.pagination {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 1.25; }

.breadcrumb {
  font-size: 0.8rem; }
  .breadcrumb a {
    color: #888; }

html, body {
  height: 100%;
  background-color: #f1f1f1; }

* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: rgba(0, 0, 0, .05) 0 0 1px; }
  *:focus {
    outline: none !important; }

.input-group-addon {
  border-radius: 0; }

.custom-input > input:active ~ .c-indicator {
  opacity: 0.4;
  background-color: #0074d9; }
  .custom-input > input:disabled ~ .c-indicator {
    opacity: 0.4; }

.custom-checkbox {
  margin-bottom: 0; }

.custom-select {
  padding: 0 1.75rem 0 0.75rem; }

#login {
  height: 100%;
  min-width: 0;
  background-size: 55px 100px;
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url('";
        // line 1465
        echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('img')->getCallable(), array("theme::img/watermark.svg")), "path", array()), "html", null, true);
        echo "'); }
  #login.success .logo-container {
    left: -50%; }
  #login.success .login-container {
    right: -50%; }
  #login .logo-container {
    left: 0;
    width: 50%;
    height: 100%;
    position: absolute;
    background: #1f1f1f;
    transition: left 300ms 500ms; }
  #login .login-container {
    right: 0;
    width: 50%;
    height: 100%;
    position: absolute;
    transition: right 300ms 500ms;
    background-size: cover;
    background-position: top, center;
    background-repeat: no-repeat, no-repeat; }
  #login .login-container .logo {
    display: none; }
  #login .login-container .logo svg {
    width: 45px;
    height: 82px;
    fill: #fff;
    margin-top: -30px;
    vertical-align: middle; }
  #login .login-container .login-wrapper {
    margin-top: 40vh; }
  #login .login-container .login-wrapper input {
    border: 0;
    outline: 0;
    border-radius: 0.17rem; }
  #login .login-container .login-wrapper label {
    color: #fff;
    margin-top: 0.35rem; }
  #login .login-container .login-wrapper button:hover {
    color: #fff;
    border-color: #fff;
    background-color: transparent; }
  #login .login-container .login-wrapper a {
    opacity: 0.6;
    color: #fff;
    transition: opacity 300ms; }
    #login .login-container .login-wrapper a:hover {
      opacity: 1; }
  #login .logo {
    color: #fff;
    font-size: 4rem;
    margin-top: 40vh;
    font-weight: bold;
    text-align: center;
    font-family: 'Montserrat', sans-serif; }
  #login .logo svg {
    width: 45px;
    height: 82px;
    margin-top: -30px;
    vertical-align: middle; }
  #login .logo svg .st0 {
    fill: #fff; }
  #login .logo span {
    font-size: 1rem;
    font-weight: normal;
    color: rgba(255, 255, 255, 0.2); }

@media (max-width: 991px) {
  #login.success .logo-container {
    left: -100%; }
    #login.success .login-container {
      right: 100%; }
    #login .logo-container {
      width: 100%; }
    #login .logo-container:after {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      content: \"\";
      opacity: 0.4;
      position: absolute;
      background-size: cover;
      background-position: top, center;
      background-repeat: no-repeat, no-repeat;
      background-image: url('";
        // line 1550
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('image_path')->getCallable(), array("theme::img/bg.svg")), "html", null, true);
        echo "'); }
    #login .logo-container .logo {
      display: none; }
    #login .login-container {
      width: 100%;
      background: none !important; }
    #login .login-container .login-wrapper {
      margin-top: 20vh; }
    #login .login-container .logo {
      margin-top: 0;
      line-height: 1;
      display: inherit;
      margin-bottom: 2rem; }
      #login .login-container .logo svg {
        width: 55px;
        height: 100px; } }

@media (max-width: 767px) {
  #login .login-container .login-wrapper {
    margin-top: 15vh;
    padding: 0 3rem; }
    #login .login-container .logo {
      margin-bottom: 4rem; } }

#installer {
  background-image: none; }
  #installer #main {
    margin: 0 !important;
    background-image: none; }
  #installer .logo {
    margin-top: 5rem;
    text-align: center; }
  #installer .logo svg {
    width: 55px;
    height: 100px;
    vertical-align: middle; }
  #installer .logo svg .st0 {
    transition: fill 50ms; }
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/3816f79a1e3fa1d10a139ff0ae8be005.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1603 => 1550,  1515 => 1465,  1319 => 1272,  1301 => 1257,  1283 => 1242,  1265 => 1227,  1247 => 1212,  1229 => 1197,  1211 => 1182,  1193 => 1167,  1175 => 1152,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
/*.variant-#{\$index}}-logo .st0, */
#main {
  overflow: hidden;
  padding-top: 70px;
  margin-left: 240px;
  background-size: 55px 100px;
  background-repeat: no-repeat;
  transition: min-height 100ms;
  background-position: center 40vh;
  background-image: url('{{ img(\"theme::img/watermark.svg\").path }}'); }

@media (max-width: 991px) {
  #main {
    margin-left: 0; } }

#menu {
  top: 70px;
  bottom: 0;
  left: 70px;
  width: 170px;
  height: 100%;
  z-index: 101;
  margin-top: 0;
  position: fixed;
  overflow-x: scroll;
  background: #333;
  padding-bottom: 70px;
  box-shadow: 2px 0 0 rgba(66, 66, 66, 0.1); }
  #menu > ul {
    padding: 0;
    margin-bottom: 70px; }
    #menu > ul > li {
      width: 100%; }
      #menu > ul > li > a {
        height: 100%;
        display: block;
        font-size: 18px;
        padding: 0 10px;
        margin: 8px 10px;
        line-height: 39px;
        position: relative;
        white-space: nowrap;
        color: rgba(255, 255, 255, 0.3); }
        #menu > ul > li > a span {
          margin-left: 7px; }
        #menu > ul > li > a:hover {
          color: #eee; }
      #menu > ul > li.active > a, #menu > ul > li.highlighted > a {
        color: #eee; }
      #menu > ul > li.section-label span {
        font-size: 10px;
        margin-bottom: 0;
        padding-bottom: 0;
        line-height: 2rem;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.15);
        text-shadow: 1px 1px rgba(0, 0, 0, 0.1); }
        #menu > ul > li.section-label span:hover {
          color: rgba(255, 255, 255, 0.15); }
      #menu > ul > li ul {
        list-style: none;
        padding-left: 0.5rem;
        margin-left: 1.25rem;
        border-left: 1px solid rgba(255, 255, 255, 0.065); }
        #menu > ul > li ul li a {
          color: rgba(255, 255, 255, 0.3); }
          #menu > ul > li ul li a:hover {
            color: #eee; }
        #menu > ul > li ul li.active > a {
          color: #eee; }

@media (max-width: 991px) {
  #menu {
    width: 0; }
    body.expand #menu {
      left: 240px !important;
      width: 240px !important; } }

@media (max-width: 767px) {
  body.expand #menu {
    left: 50% !important;
    width: 50% !important; } }

#footer {
  padding: 1em 3em;
  overflow: hidden;
  margin-left: 240px;
  background: #fff; }
  #footer ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline-block; }
    #footer ul.meta {
      margin-top: 8px; }
    #footer ul.extra {
      float: right; }
    #footer ul li {
      color: #b5bcc0;
      display: inline-block;
      font-size: 0.875rem; }
      #footer ul li:not(:last-child) {
        margin-right: 0.75em; }
      #footer ul li.logo {
        margin-right: 1em; }
        #footer ul li.logo img {
          height: 2em;
          margin-top: -0.5em;
          display: inline-block; }
      #footer ul li.footprint span {
        color: #c2c9cc; }

@media (max-width: 991px) {
  #footer {
    margin-left: 0; }
    #footer ul {
      display: block; }
      #footer ul.extra {
        margin-top: 1rem;
        float: none !important; }
        #footer ul.extra li {
          width: 100%;
          margin-top: 0.5rem !important; }
          #footer ul.extra li select, #footer ul.extra li .btn {
            width: 100%;
            display: block; } }

@media (max-width: 767px) {
  #footer ul li {
    width: 100%; } }

#topbar {
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  position: fixed;
  background: #fff;
  box-shadow: 1px 0 3px 0 rgba(0, 0, 0, 0.2); }
  #topbar .topbar-left {
    z-index: 1;
    float: left;
    width: 70px;
    height: 70px;
    position: relative;
    text-align: center;
    background-color: #f5f5f5; }
  #topbar .logo {
    font-size: 17px;
    font-weight: bold;
    line-height: 70px;
    letter-spacing: 0.05em;
    color: #212121 !important;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif; }
    #topbar .logo span {
      display: none; }
    #topbar .logo svg {
      width: 22px;
      height: 40px;
      margin-top: -9px;
      vertical-align: middle; }
      #topbar .logo svg .st0 {
        transition: fill 300ms 500ms; }
    #topbar .logo small {
      font-size: 10px;
      font-weight: normal;
      color: rgba(0, 0, 0, 0.2); }
  #topbar .button-menu {
    float: left; }
    #topbar .button-menu .button-menu-mobile {
      border: none;
      color: #888;
      cursor: pointer;
      font-size: 21px;
      padding: 0 15px;
      line-height: 70px;
      background: transparent; }
  #topbar .navbar-form {
    float: left;
    border: none;
    box-shadow: none; }
    #topbar .navbar-form .form-group {
      margin: 0;
      height: 70px;
      display: inline-block; }
  #topbar .btn-search {
    display: none; }
  #topbar .navbar-default {
    padding: 0;
    border: none;
    border-radius: 0;
    margin-bottom: 0;
    background-color: #fff; }
    #topbar .navbar-default .navbar-nav {
      float: right; }
  #topbar .nav > li {
    margin-left: 0; }
    #topbar .nav > li > a {
      padding: 0 15px;
      line-height: 70px;
      position: relative;
      color: #888 !important; }
  #topbar .dropdown-menu {
    margin: 0;
    z-index: 998;
    min-width: 10rem;
    max-height: 70vh;
    border-top: none;
    overflow-y: auto;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    box-shadow: inset 0 3px 3px -3px rgba(0, 0, 0, 0.2); }
    #topbar .dropdown-menu .dropdown-item {
      display: block; }
    #topbar .dropdown-menu .dropdown-item i {
      color: #a8a8a8;
      margin-right: 0.4rem; }
    #topbar .dropdown-menu .dropdown-item a {
      display: block; }
    #topbar .dropdown-menu .notification-title {
      color: #000;
      font-size: 16px;
      font-weight: 400;
      text-align: center;
      padding: 5px 0 10px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1); }
    #topbar .dropdown-menu .list-group {
      margin-bottom: 0; }
    #topbar .dropdown-menu .list-group .list-group-item {
      border: none;
      border-radius: 0;
      padding: 10px 20px; }
      #topbar .dropdown-menu .list-group .list-group-item:last-child {
        text-align: center; }

body.expand #topbar .topbar-left {
  width: 240px !important; }
  body.expand #topbar .topbar-left .logo span {
    margin-left: 4px;
    display: inline-block; }

@media (max-width: 767px) {
  #topbar .dropdown-menu {
    top: 70px;
    position: fixed;
    max-height: calc(100vh - 85px);
    left: 15px;
    right: 15px; }
    body.expand #topbar .topbar-left {
      width: 50% !important; } }

#search .search-bar {
  height: 70px;
  color: #212121;
  font-size: 14px;
  border: none !important;
  box-shadow: none !important;
  background-color: transparent !important; }
  #search .results {
    min-width: 15rem; }

@media (max-width: 767px) {
  body.expand #search {
    display: none; } }

#buttons {
  margin-bottom: 1.5rem; }

@media (max-width: 767px) {
  #buttons .btn {
    display: block;
    margin-top: 0.5rem; } }

#sidebar {
  top: 70px;
  bottom: 0;
  width: 70px;
  height: 100%;
  z-index: 103;
  margin-top: 0;
  position: fixed;
  overflow-x: scroll;
  overflow-y: hidden;
  background: #252525;
  padding-bottom: 70px;
  -webkit-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  -moz-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  -o-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1); }
  #sidebar > ul {
    padding: 0;
    margin-bottom: 70px; }
  #sidebar > ul > li {
    width: 100%; }
  #sidebar > ul > li > a {
    height: 100%;
    margin: 8px 0;
    display: block;
    padding: 0 10px;
    font-size: 18px;
    line-height: 39px;
    position: relative;
    text-align: center;
    white-space: nowrap;
    color: rgba(255, 255, 255, 0.3); }
    #sidebar > ul > li > a .icon {
      width: 1.25rem;
      text-align: center;
      display: inline-block; }
    #sidebar > ul > li > a .title {
      display: none;
      margin-left: 8px; }
    #sidebar > ul > li > a i {
      width: 1.25rem; }
    #sidebar > ul > li > a svg {
      width: auto;
      height: auto;
      max-width: 1.25rem;
      max-height: 1.25rem;
      vertical-align: middle; }
    #sidebar > ul > li > a svg path {
      fill: rgba(255, 255, 255, 0.3); }
    #sidebar > ul > li > a:hover {
      color: #eee; }
    #sidebar > ul > li > a:hover svg path {
      fill: #eee; }
  #sidebar > ul > li.dragged {
    opacity: 0.3; }
  #sidebar > ul > li.placeholder {
    display: none; }
  #sidebar > ul > li.active {
    background: #333;
    box-sizing: border-box;
    border-left: 3px solid #fff; }
    #sidebar > ul > li.active a {
      color: #eee;
      margin-left: -3px; }
    #sidebar > ul > li.active a svg path {
      fill: #eee; }
  #sidebar.open, #sidebar.hover:hover {
    width: 240px !important; }
  #sidebar.open a, #sidebar.hover:hover a {
    text-align: left;
    padding-left: 20px; }
  #sidebar.open a .title, #sidebar.hover:hover a .title {
    display: inline-block; }

@media (max-width: 991px) {
  #sidebar {
    width: 0;
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none; } }

@media (max-width: 767px) {
  #sidebar.open, #sidebar.hover:hover {
    width: 50% !important; } }

.tag {
  border-radius: 0.1rem; }

.nav.nav-sections {
  margin-bottom: 1em;
  background-color: #e1e2e3; }
  .nav.nav-sections li {
    text-align: center;
    display: inline-block; }
  .nav.nav-sections li a {
    color: #858b8f;
    display: block;
    padding: 0.5em 2em; }
  .nav.nav-sections li.active a {
    color: #55595c;
    background: #fff; }
  .nav.nav-sections.nav-stacked {
    float: left;
    width: 200px;
    margin-bottom: 0; }
  .nav.nav-sections.nav-stacked .nav-item {
    display: block;
    text-align: left; }
    .nav.nav-sections.nav-stacked .nav-item .nav-link {
      padding: 0.5em 1em; }
  .nav.nav-pills .nav-item .nav-link {
    color: #373a3c; }
    .nav.nav-pills .nav-item .nav-link:hover {
      background: #eceeef; }
    .nav.nav-pills .nav-item .nav-link small {
      color: #888; }

.tab-pane:not(.active) {
  display: none; }

.card {
  position: relative;
  margin-bottom: 1.5rem;
  -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  .card.card-container {
    box-shadow: none;
    background: transparent; }
  .card.card-flex {
    display: flex; }
  .card.card-flex .card-block {
    width: 100%; }
  .card .card-header {
    background-color: #fafafa;
    border-bottom: 1px solid rgba(0, 0, 0, .05); }
  .card .card-title {
    margin: 0;
    color: #626262; }
  .card .card-title small {
    color: #888; }

@media (max-width: 767px) {
  .card-block {
    padding: 0.5em; } }

.form .field-group {
  margin-bottom: 2rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #eceeef; }
  .form .field-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none; }
  .form .form-group {
    margin-bottom: 0; }
  .form .form-group.has-info .c-checkbox, .form .form-group.has-info .c-radio {
    color: #11bef6; }
  .form .form-group.has-danger .c-checkbox, .form .form-group.has-danger .c-radio {
    color: #ff3160; }
  .form .form-group.has-success .c-checkbox, .form .form-group.has-success .c-radio {
    color: #47d165; }
  .form .form-group.has-warning .c-checkbox, .form .form-group.has-warning .c-radio {
    color: #ff754b; }
  .form .controls .actions {
    display: inline-block; }
  .form .controls .buttons {
    float: right; }
  .form .controls.affix {
    bottom: 0;
    position: fixed;
    margin-bottom: 0;
    z-index: 950;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0; }
  .form .controls.affix:before {
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    content: '';
    position: absolute;
    box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.25); }
  .form .controls.affix:after {
    top: 1px;
    left: 0;
    right: 0;
    height: 1px;
    content: '';
    position: absolute;
    background: #fff; }
  .form label.control-label {
    font-weight: bold; }
  .form label .required {
    color: #ff3160; }

.form-control {
  border-radius: 0.17rem; }

@media (max-width: 767px) {
  .form .controls .actions, .form .controls .buttons {
    float: none;
    display: block; }
    .form .controls .btn, .form .controls .btn-group {
      width: 100%;
      display: block;
      margin-top: 0.5rem; } }

ul.tree {
  padding-left: 0;
  list-style: none; }
  ul.tree ul, ul.tree ol {
    list-style: none; }
  ul.tree li .card {
    padding-right: 4px;
    margin-bottom: 7px;
    background-color: #fff;
    border: 2px solid transparent;
    border-radius: 0.17rem;
    -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
    -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
    box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  ul.tree li .card .handle {
    cursor: move;
    padding: 6px 9px;
    box-shadow: none;
    background: #eceeef;
    color: rgba(0, 0, 0, 0.2);
    border-radius: 0.1rem; }
  ul.tree li .card .buttons {
    float: right;
    display: none; }
  ul.tree li .card > span {
    margin-left: 6px; }
  ul.tree li .card:hover > .buttons {
    display: block; }
  ul.tree li.dragged {
    opacity: 0.5;
    position: absolute;
    margin-bottom: 1.5; }
  ul.tree li.placeholder {
    height: 30px;
    margin-bottom: 9px;
    border: 2px dashed #888;
    border-radius: 0.17rem; }
  ul.tree li.collapsed > .card {
    position: relative; }
    ul.tree li.collapsed > .card > .handle {
      color: #fff;
      background: #11bef6; }
    ul.tree li.collapsed > .card > .count {
      top: -7px;
      left: -7px;
      width: 14px;
      height: 14px;
      color: #fff;
      font-size: 9px;
      cursor: default;
      font-weight: bold;
      line-height: 14px;
      text-align: center;
      border-radius: 50%;
      position: absolute;
      background: #ff3160;
      -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
      -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
      box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  ul.tree li.collapsed > ul {
    display: none; }

@media (max-width: 767px) {
  ul.tree li .card .buttons {
    display: block; }
    ul.tree li .card .buttons a {
      font-size: 0; }
      ul.tree li .card .buttons a .fa {
        font-size: 18px !important; } }

@media (max-width: 375px) {
  ul.tree li .card .buttons {
    display: block;
    border-left: 1em solid transparent;
    border-right: 1em solid transparent;
    border-top: 1em solid #38b5e6;
    margin-top: 0.275em; }
    ul.tree li .card .buttons a {
      display: none; }
      ul.tree li .card .buttons a .fa {
        font-size: 18px !important; }
    ul.tree li .card .buttons:hover, ul.tree li .card .buttons:focus {
      position: fixed;
      bottom: 0;
      background-color: #3e3e3e !important;
      border: none;
      display: block;
      width: 100%;
      z-index: 500;
      padding-top: 0.75em;
      padding-left: 0.75em;
      padding-right: 0.75em;
      padding-bottom: 0.75em;
      margin-left: -1.1em; }
      ul.tree li .card .buttons:hover a, ul.tree li .card .buttons:focus a {
        display: inline-block; } }

.alert {
  -webkit-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  -moz-box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1);
  box-shadow: 1px 1px 0 rgba(66, 66, 66, 0.1); }
  .alert p {
    margin-bottom: 0; }

.table {
  margin-bottom: 0; }
  .table th, .table td {
    vertical-align: middle; }
  .table th h1:last-of-type, .table td h1:last-of-type, .table th h2:last-of-type, .table td h2:last-of-type, .table th h3:last-of-type, .table td h3:last-of-type, .table th h4:last-of-type, .table td h4:last-of-type, .table th h5:last-of-type, .table td h5:last-of-type {
    margin-bottom: 0; }
  .table > thead > tr.dragged, .table > tbody > tr.dragged, .table > tfoot > tr.dragged {
    opacity: 0.2; }
  .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    vertical-align: middle; }
    .table > thead > tr > th .handle:hover, .table > tbody > tr > th .handle:hover, .table > tfoot > tr > th .handle:hover, .table > thead > tr > td .handle:hover, .table > tbody > tr > td .handle:hover, .table > tfoot > tr > td .handle:hover {
      cursor: move; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #eceeef; }
  .table thead th a {
    color: #373a3c; }

.table-filters {
  padding: 1rem;
  border-top: 1px solid #eceeef; }
  .table-filters .form-group {
    margin-bottom: 0 !important; }

.no-results {
  padding: 1rem;
  border-top: 1px solid #eceeef; }

body.modal-open {
  overflow: visible; }

.modal {
  overflow: hidden; }
  .modal.fade .modal-dialog {
    transition: transform 0.3s ease-out; }
  .modal .close {
    margin-top: 4px;
    margin-right: 4px;
    color: rgba(0, 0, 0, 0.5); }
  .modal .modal-content {
    min-height: 100px;
    border-radius: 0.1rem; }

.modal-loading {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 99999;
  position: absolute;
  background: rgba(255, 255, 255, 0.5); }
  .modal-loading .loader {
    margin-top: 0.7rem; }

.modal-wide {
  max-width: unset; }

.modal-dialog.modal-wide {
  width: auto;
  margin: 30px; }

.modal-filter {
  margin-bottom: 1rem; }

.modal-title {
  padding-right: 3rem; }
/*!
 * # Semantic UI 1.12.2 - Loader
 * http://github.com/semantic-org/semantic-ui/
 *
 *
 * Copyright 2014 Contributors
 * Released under the MIT license
 * http://opensource.org/licenses/MIT
 *
 */
/*******************************
 Loader
 *******************************/
/* Standard Size */
.loader {
  top: 50%;
  left: 50%;
  margin: 0;
  z-index: 1000;
  display: none;
  position: absolute;
  text-align: center;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%); }
/* Static Shape */
.loader:before {
  position: absolute;
  content: '';
  top: 0%;
  left: 50%;
  width: 100%;
  height: 100%;
  border-radius: 500rem;
  border: 0.1em solid rgba(0, 0, 0, 0.1); }
/* Active Shape */
.loader:after {
  position: absolute;
  content: '';
  top: 0%;
  left: 50%;
  width: 100%;
  height: 100%;
  -webkit-animation: loader 0.6s linear;
  animation: loader 0.6s linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  border-radius: 500rem;
  border-color: #aaa transparent transparent;
  border-style: solid;
  border-width: 0.1em;
  box-shadow: 0px 0px 0px 1px transparent; }
/* Active Animation */
@-webkit-keyframes loader {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }

  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loader {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }

  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }
/* Sizes */
.loader:before, .loader:after {
  width: 2.2585em;
  height: 2.2585em;
  margin: 0em 0em 0em -1.12925em; }

.mini.loader:before, .mini.loader:after {
  width: 1.2857em;
  height: 1.2857em;
  margin: 0em 0em 0em -0.64285em; }

.small.loader:before, .small.loader:after {
  width: 1.7142em;
  height: 1.7142em;
  margin: 0em 0em 0em -0.8571em; }

.large.loader:before, .large.loader:after {
  width: 3.5714em;
  height: 3.5714em;
  margin: 0em 0em 0em -1.7857em; }
/*-------------------
 Coupling
 --------------------*/
/* White Dimmer (Inverted) */
.inverted.dimmer .loader {
  color: rgba(0, 0, 0, 0.8); }

.inverted.dimmer .loader:before {
  border-color: rgba(0, 0, 0, 0.1); }

.inverted.dimmer .loader:after {
  border-color: #aaa transparent transparent; }
/*******************************
 Types
 *******************************/
/*-------------------
 Text
 --------------------*/
.text.loader {
  width: auto !important;
  height: auto !important;
  text-align: center;
  font-style: normal; }
/*******************************
 States
 *******************************/
.indeterminate.loader:after {
  -webkit-animation-direction: reverse;
  animation-direction: reverse;
  -webkit-animation-duration: 1.2s;
  animation-duration: 1.2s; }

.loader.active, .loader.visible {
  display: block; }

.loader.disabled, .loader.hidden {
  display: none; }
/*******************************
 Variations
 *******************************/
/*-------------------
 Sizes
 --------------------*/
/* Loader */
.inverted.dimmer .mini.loader, .mini.loader {
  width: 1.2857em;
  height: 1.2857em;
  font-size: 0.7857em; }

.inverted.dimmer .small.loader, .small.loader {
  width: 1.7142em;
  height: 1.7142em;
  font-size: 0.9285em; }

.inverted.dimmer .loader, .loader {
  width: 2.2585em;
  height: 2.2585em;
  font-size: 1em; }

.inverted.dimmer .loader.large, .loader.large {
  width: 4.5714em;
  height: 4.5714em;
  font-size: 1.1428em; }
/* Text Loader */
.mini.text.loader {
  min-width: 1.2857em;
  padding-top: 1.9857em; }

.small.text.loader {
  min-width: 1.7142em;
  padding-top: 2.4142em; }

.text.loader {
  min-width: 2.2585em;
  padding-top: 2.9585em; }

.large.text.loader {
  min-width: 4.5714em;
  padding-top: 5.2714em; }
/*-------------------
 Inverted
 --------------------*/
.inverted.loader {
  color: #fff; }

.inverted.loader:before {
  border-color: rgba(255, 255, 255, 0.15); }

.inverted.loader:after {
  border-top-color: #fff; }
/*-------------------
 Inline
 --------------------*/
.inline.loader {
  position: relative;
  vertical-align: middle;
  margin: 0em;
  left: 0em;
  top: 0em;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none; }

.inline.loader.active, .inline.loader.visible {
  display: inline-block; }
/* Centered Inline */
.centered.inline.loader.active, .centered.inline.loader.visible {
  display: block; }

.btn {
  transition: all 100ms;
  /**
   * Additional Sizes
   */
  /**
   * Rounded Buttons
   */ }
  .btn.btn-xs {
    font-size: 0.75rem;
    padding: 0.25rem 0.33333rem; }
  .btn.btn-rounded {
    border-radius: 2rem; }
/**
 * Additional Variations
 */
.btn-default {
  color: #252525 !important;
  background-color: #d4d6d7;
  border-color: #d4d6d7; }
  .btn-default:hover {
    color: #252525 !important;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-default:focus, .btn-default.focus {
    color: #252525 !important;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-default:active, .btn-default.active, .open > .btn-default.dropdown-toggle {
    color: #252525 !important;
    background-color: #babdbe;
    border-color: #b4b8ba;
    background-image: none; }
  .btn-default:active:hover, .btn-default.active:hover, .open > .btn-default.dropdown-toggle:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .btn-default.dropdown-toggle:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .btn-default.dropdown-toggle.focus {
    color: #252525 !important;
    background-color: #a7abad;
    border-color: #92979a; }
  .btn-default.disabled:focus, .btn-default:disabled:focus, .btn-default.disabled.focus, .btn-default:disabled.focus {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }
  .btn-default.disabled:hover, .btn-default:disabled:hover {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }

.btn-inverse {
  color: #fff;
  background-color: #d4d6d7;
  border-color: #d4d6d7; }
  .btn-inverse.btn-outline {
    color: #d4d6d7;
    border-color: #d4d6d7;
    background-color: transparent; }
  .btn-inverse:hover {
    color: #fff;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-inverse:focus, .btn-inverse.focus {
    color: #fff;
    background-color: #babdbe;
    border-color: #b4b8ba; }
  .btn-inverse:active, .btn-inverse.active, .open > .btn-inverse.dropdown-toggle {
    color: #fff;
    background-color: #babdbe;
    border-color: #b4b8ba;
    background-image: none; }
  .btn-inverse:active:hover, .btn-inverse.active:hover, .open > .btn-inverse.dropdown-toggle:hover, .btn-inverse:active:focus, .btn-inverse.active:focus, .open > .btn-inverse.dropdown-toggle:focus, .btn-inverse:active.focus, .btn-inverse.active.focus, .open > .btn-inverse.dropdown-toggle.focus {
    color: #fff;
    background-color: #a7abad;
    border-color: #92979a; }
  .btn-inverse.disabled:focus, .btn-inverse:disabled:focus, .btn-inverse.disabled.focus, .btn-inverse:disabled.focus {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }
  .btn-inverse.disabled:hover, .btn-inverse:disabled:hover {
    background-color: #d4d6d7;
    border-color: #d4d6d7; }

.btn-white {
  color: #333;
  background-color: #fff;
  border-color: #fff; }
  .btn-white.btn-outline {
    color: #fff;
    border-color: #fff;
    background-color: transparent; }
  .btn-white.btn-outline:focus, .btn-white.btn-outline:active, .btn-white.btn-outline:hover {
    color: #fff !important;
    border-color: #fff !important;
    background-color: transparent !important; }
  .btn-white:hover {
    color: #333;
    background-color: #e6e6e6;
    border-color: #e0e0e0; }
  .btn-white:focus, .btn-white.focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #e0e0e0; }
  .btn-white:active, .btn-white.active, .open > .btn-white.dropdown-toggle {
    color: #333;
    background-color: #e6e6e6;
    border-color: #e0e0e0;
    background-image: none; }
  .btn-white:active:hover, .btn-white.active:hover, .open > .btn-white.dropdown-toggle:hover, .btn-white:active:focus, .btn-white.active:focus, .open > .btn-white.dropdown-toggle:focus, .btn-white:active.focus, .btn-white.active.focus, .open > .btn-white.dropdown-toggle.focus {
    color: #333;
    background-color: #d4d4d4;
    border-color: #bfbfbf; }
  .btn-white.disabled:focus, .btn-white:disabled:focus, .btn-white.disabled.focus, .btn-white:disabled.focus {
    background-color: #fff;
    border-color: #fff; }
  .btn-white.disabled:hover, .btn-white:disabled:hover {
    background-color: #fff;
    border-color: #fff; }
/**
 * Redo all the regular button
 * styles in order to add outline
 * and retain the default hover effect.
 */
.btn-primary {
  color: #fff !important;
  background-color: #b21cc3;
  border-color: #b21cc3; }
  .btn-primary.btn-outline {
    color: #b21cc3;
    border-color: #b21cc3;
    background-color: transparent; }
  .btn-primary.btn-gradient {
    background-image: linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%); }
  .btn-primary:hover {
    color: #fff !important;
    background-color: #891696;
    border-color: #81148d; }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff !important;
    background-color: #891696;
    border-color: #81148d; }
  .btn-primary:active, .btn-primary.active, .open > .btn-primary.dropdown-toggle {
    color: #fff !important;
    background-color: #891696;
    border-color: #81148d;
    background-image: none; }
  .btn-primary:active:hover, .btn-primary.active:hover, .open > .btn-primary.dropdown-toggle:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .btn-primary.dropdown-toggle:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .btn-primary.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #6d1177;
    border-color: #4c0c54; }
  .btn-primary.disabled:focus, .btn-primary:disabled:focus, .btn-primary.disabled.focus, .btn-primary:disabled.focus {
    background-color: #b21cc3;
    border-color: #b21cc3; }
  .btn-primary.disabled:hover, .btn-primary:disabled:hover {
    background-color: #b21cc3;
    border-color: #b21cc3; }

.btn-success {
  color: #fff !important;
  background-color: #47d165;
  border-color: #47d165; }
  .btn-success.btn-outline {
    color: #47d165;
    border-color: #47d165;
    background-color: transparent; }
  .btn-success.btn-gradient {
    background-image: linear-gradient(141deg, #bbee61 0%, #47d165 95%); }
  .btn-success:hover {
    color: #fff !important;
    background-color: #2eb74c;
    border-color: #2caf48; }
  .btn-success:focus, .btn-success.focus {
    color: #fff !important;
    background-color: #2eb74c;
    border-color: #2caf48; }
  .btn-success:active, .btn-success.active, .open > .btn-success.dropdown-toggle {
    color: #fff !important;
    background-color: #2eb74c;
    border-color: #2caf48;
    background-image: none; }
  .btn-success:active:hover, .btn-success.active:hover, .open > .btn-success.dropdown-toggle:hover, .btn-success:active:focus, .btn-success.active:focus, .open > .btn-success.dropdown-toggle:focus, .btn-success:active.focus, .btn-success.active.focus, .open > .btn-success.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #279b40;
    border-color: #1f7a32; }
  .btn-success.disabled:focus, .btn-success:disabled:focus, .btn-success.disabled.focus, .btn-success:disabled.focus {
    background-color: #47d165;
    border-color: #47d165; }
  .btn-success.disabled:hover, .btn-success:disabled:hover {
    background-color: #47d165;
    border-color: #47d165; }

.btn-info {
  color: #fff !important;
  background-color: #11bef6;
  border-color: #11bef6; }
  .btn-info.btn-outline {
    color: #11bef6;
    border-color: #11bef6;
    background-color: transparent; }
  .btn-info.btn-gradient {
    background-image: linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%); }
  .btn-info:hover {
    color: #fff !important;
    background-color: #089ccc;
    border-color: #0795c2; }
  .btn-info:focus, .btn-info.focus {
    color: #fff !important;
    background-color: #089ccc;
    border-color: #0795c2; }
  .btn-info:active, .btn-info.active, .open > .btn-info.dropdown-toggle {
    color: #fff !important;
    background-color: #089ccc;
    border-color: #0795c2;
    background-image: none; }
  .btn-info:active:hover, .btn-info.active:hover, .open > .btn-info.dropdown-toggle:hover, .btn-info:active:focus, .btn-info.active:focus, .open > .btn-info.dropdown-toggle:focus, .btn-info:active.focus, .btn-info.active.focus, .open > .btn-info.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #0682aa;
    border-color: #056483; }
  .btn-info.disabled:focus, .btn-info:disabled:focus, .btn-info.disabled.focus, .btn-info:disabled.focus {
    background-color: #11bef6;
    border-color: #11bef6; }
  .btn-info.disabled:hover, .btn-info:disabled:hover {
    background-color: #11bef6;
    border-color: #11bef6; }

.btn-warning {
  color: #fff !important;
  background-color: #ff754b;
  border-color: #ff754b; }
  .btn-warning.btn-outline {
    color: #ff754b;
    border-color: #ff754b;
    background-color: transparent; }
  .btn-warning:hover {
    color: #fff !important;
    background-color: #ff4e18;
    border-color: #ff460e; }
  .btn-warning:focus, .btn-warning.focus {
    color: #fff !important;
    background-color: #ff4e18;
    border-color: #ff460e; }
  .btn-warning:active, .btn-warning.active, .open > .btn-warning.dropdown-toggle {
    color: #fff !important;
    background-color: #ff4e18;
    border-color: #ff460e;
    background-image: none; }
  .btn-warning:active:hover, .btn-warning.active:hover, .open > .btn-warning.dropdown-toggle:hover, .btn-warning:active:focus, .btn-warning.active:focus, .open > .btn-warning.dropdown-toggle:focus, .btn-warning:active.focus, .btn-warning.active.focus, .open > .btn-warning.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #f33900;
    border-color: #cb2f00; }
  .btn-warning.disabled:focus, .btn-warning:disabled:focus, .btn-warning.disabled.focus, .btn-warning:disabled.focus {
    background-color: #ff754b;
    border-color: #ff754b; }
  .btn-warning.disabled:hover, .btn-warning:disabled:hover {
    background-color: #ff754b;
    border-color: #ff754b; }

.btn-danger {
  color: #fff !important;
  background-color: #ff3160;
  border-color: #ff3160; }
  .btn-danger.btn-outline {
    color: #ff3160;
    border-color: #ff3160;
    background-color: transparent; }
  .btn-danger.btn-gradient {
    background-image: linear-gradient(141deg, #ff754b 0%, #ff3160 75%); }
  .btn-danger:hover {
    color: #fff !important;
    background-color: #fd003a;
    border-color: #f30037; }
  .btn-danger:focus, .btn-danger.focus {
    color: #fff !important;
    background-color: #fd003a;
    border-color: #f30037; }
  .btn-danger:active, .btn-danger.active, .open > .btn-danger.dropdown-toggle {
    color: #fff !important;
    background-color: #fd003a;
    border-color: #f30037;
    background-image: none; }
  .btn-danger:active:hover, .btn-danger.active:hover, .open > .btn-danger.dropdown-toggle:hover, .btn-danger:active:focus, .btn-danger.active:focus, .open > .btn-danger.dropdown-toggle:focus, .btn-danger:active.focus, .btn-danger.active.focus, .open > .btn-danger.dropdown-toggle.focus {
    color: #fff !important;
    background-color: #d90032;
    border-color: #b10028; }
  .btn-danger.disabled:focus, .btn-danger:disabled:focus, .btn-danger.disabled.focus, .btn-danger:disabled.focus {
    background-color: #ff3160;
    border-color: #ff3160; }
  .btn-danger.disabled:hover, .btn-danger:disabled:hover {
    background-color: #ff3160;
    border-color: #ff3160; }

.variant-0 .variant-logo .st0 {
  fill: #8726df !important; }

.variant-0 .variant-border {
  border-color: #8726df !important; }

.variant-0 .variant-color, .variant-0-color {
  color: #8726df !important; }

.variant-0 .variant-background, .variant-0-background {
  background: linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-0 .variant-background-pattern, .variant-0-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-1 .variant-logo .st0 {
  fill: #8726df !important; }

.variant-1 .variant-border {
  border-color: #8726df !important; }

.variant-1 .variant-color, .variant-1-color {
  color: #8726df !important; }

.variant-1 .variant-background, .variant-1-background {
  background: linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-1 .variant-background-pattern, .variant-1-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-2 .variant-logo .st0 {
  fill: #8726df !important; }

.variant-2 .variant-border {
  border-color: #8726df !important; }

.variant-2 .variant-color, .variant-2-color {
  color: #8726df !important; }

.variant-2 .variant-background, .variant-2-background {
  background: linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-2 .variant-background-pattern, .variant-2-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #11bef6 0%, #8726df 95%) !important; }

.variant-3 .variant-logo .st0 {
  fill: #c61db4 !important; }

.variant-3 .variant-border {
  border-color: #c61db4 !important; }

.variant-3 .variant-color, .variant-3-color {
  color: #c61db4 !important; }

.variant-3 .variant-background, .variant-3-background {
  background: linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-3 .variant-background-pattern, .variant-3-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-4 .variant-logo .st0 {
  fill: #c61db4 !important; }

.variant-4 .variant-border {
  border-color: #c61db4 !important; }

.variant-4 .variant-color, .variant-4-color {
  color: #c61db4 !important; }

.variant-4 .variant-background, .variant-4-background {
  background: linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-4 .variant-background-pattern, .variant-4-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #c61db4 0%, #b21cc3 51%, #a21acf 75%) !important; }

.variant-5 .variant-logo .st0 {
  fill: #c82ecb !important; }

.variant-5 .variant-border {
  border-color: #c82ecb !important; }

.variant-5 .variant-color, .variant-5-color {
  color: #c82ecb !important; }

.variant-5 .variant-background, .variant-5-background {
  background: linear-gradient(141deg, #e3488b 0%, #c82ecb 51%, #b224d7 75%) !important; }

.variant-5 .variant-background-pattern, .variant-5-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #e3488b 0%, #c82ecb 51%, #b224d7 75%) !important; }

.variant-6 .variant-logo .st0 {
  fill: #ff3160 !important; }

.variant-6 .variant-border {
  border-color: #ff3160 !important; }

.variant-6 .variant-color, .variant-6-color {
  color: #ff3160 !important; }

.variant-6 .variant-background, .variant-6-background {
  background: linear-gradient(141deg, #ff754b 0%, #ff3160 75%) !important; }

.variant-6 .variant-background-pattern, .variant-6-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #ff754b 0%, #ff3160 75%) !important; }

.variant-7 .variant-logo .st0 {
  fill: #8474ec !important; }

.variant-7 .variant-border {
  border-color: #8474ec !important; }

.variant-7 .variant-color, .variant-7-color {
  color: #8474ec !important; }

.variant-7 .variant-background, .variant-7-background {
  background: linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.variant-7 .variant-background-pattern, .variant-7-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.variant-8 .variant-logo .st0 {
  fill: #8474ec !important; }

.variant-8 .variant-border {
  border-color: #8474ec !important; }

.variant-8 .variant-color, .variant-8-color {
  color: #8474ec !important; }

.variant-8 .variant-background, .variant-8-background {
  background: linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.variant-8 .variant-background-pattern, .variant-8-background-pattern {
  background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'), linear-gradient(141deg, #0fdafd 0%, #01a5fb 51%, #8474ec 100%) !important; }

.dropdown-toggle-split {
  border-right-color: rgba(0, 0, 0, 0.04); }

.dropdown-toggle::after {
  margin-top: -0.2em; }
/* perfect-scrollbar v0.6.14 */
.ps-container {
  -ms-touch-action: auto;
  touch-action: auto;
  overflow: hidden !important;
  -ms-overflow-style: none; }

@supports (-ms-overflow-style: none) {
  .ps-container {
    overflow: auto !important; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps-container {
    overflow: auto !important; } }

.ps-container.ps-active-x > .ps-scrollbar-x-rail, .ps-container.ps-active-y > .ps-scrollbar-y-rail {
  display: block;
  background-color: transparent; }

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 8px; }

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 8px; }

.ps-container > .ps-scrollbar-x-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
  -o-transition: background-color 0.2s linear, opacity 0.2s linear;
  -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
  transition: background-color 0.2s linear, opacity 0.2s linear;
  bottom: 0px;
  /* there must be 'bottom' for ps-scrollbar-x-rail */
  height: 10px; }

.ps-container > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  -o-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  -moz-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  bottom: 2px;
  /* there must be 'bottom' for ps-scrollbar-x */
  height: 6px; }

.ps-container > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x, .ps-container > .ps-scrollbar-x-rail:active > .ps-scrollbar-x {
  height: 8px; }

.ps-container > .ps-scrollbar-y-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
  -o-transition: background-color 0.2s linear, opacity 0.2s linear;
  -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
  transition: background-color 0.2s linear, opacity 0.2s linear;
  right: 0;
  /* there must be 'right' for ps-scrollbar-y-rail */
  width: 10px; }

.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out;
  -o-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  -moz-transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  transition: background-color 0.2s linear, height 0.2s linear, width 0.2s ease-in-out, border-radius 0.2s ease-in-out, -webkit-border-radius 0.2s ease-in-out, -moz-border-radius 0.2s ease-in-out;
  right: 1px;
  /* there must be 'right' for ps-scrollbar-y */
  width: 3px; }

.ps-container > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y, .ps-container > .ps-scrollbar-y-rail:active > .ps-scrollbar-y {
  width: 8px; }

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 8px; }

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 8px; }

.ps-container:hover > .ps-scrollbar-x-rail, .ps-container:hover > .ps-scrollbar-y-rail {
  opacity: 0.6; }

.ps-container:hover > .ps-scrollbar-x-rail:hover {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
  background-color: #999; }

.ps-container:hover > .ps-scrollbar-y-rail:hover {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
  background-color: #999; }

.close {
  opacity: 1;
  line-height: 18px; }

.text-center {
  text-align: center; }

.hidden {
  display: none; }

.pagination {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 1.25; }

.breadcrumb {
  font-size: 0.8rem; }
  .breadcrumb a {
    color: #888; }

html, body {
  height: 100%;
  background-color: #f1f1f1; }

* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: rgba(0, 0, 0, .05) 0 0 1px; }
  *:focus {
    outline: none !important; }

.input-group-addon {
  border-radius: 0; }

.custom-input > input:active ~ .c-indicator {
  opacity: 0.4;
  background-color: #0074d9; }
  .custom-input > input:disabled ~ .c-indicator {
    opacity: 0.4; }

.custom-checkbox {
  margin-bottom: 0; }

.custom-select {
  padding: 0 1.75rem 0 0.75rem; }

#login {
  height: 100%;
  min-width: 0;
  background-size: 55px 100px;
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url('{{ img(\"theme::img/watermark.svg\").path }}'); }
  #login.success .logo-container {
    left: -50%; }
  #login.success .login-container {
    right: -50%; }
  #login .logo-container {
    left: 0;
    width: 50%;
    height: 100%;
    position: absolute;
    background: #1f1f1f;
    transition: left 300ms 500ms; }
  #login .login-container {
    right: 0;
    width: 50%;
    height: 100%;
    position: absolute;
    transition: right 300ms 500ms;
    background-size: cover;
    background-position: top, center;
    background-repeat: no-repeat, no-repeat; }
  #login .login-container .logo {
    display: none; }
  #login .login-container .logo svg {
    width: 45px;
    height: 82px;
    fill: #fff;
    margin-top: -30px;
    vertical-align: middle; }
  #login .login-container .login-wrapper {
    margin-top: 40vh; }
  #login .login-container .login-wrapper input {
    border: 0;
    outline: 0;
    border-radius: 0.17rem; }
  #login .login-container .login-wrapper label {
    color: #fff;
    margin-top: 0.35rem; }
  #login .login-container .login-wrapper button:hover {
    color: #fff;
    border-color: #fff;
    background-color: transparent; }
  #login .login-container .login-wrapper a {
    opacity: 0.6;
    color: #fff;
    transition: opacity 300ms; }
    #login .login-container .login-wrapper a:hover {
      opacity: 1; }
  #login .logo {
    color: #fff;
    font-size: 4rem;
    margin-top: 40vh;
    font-weight: bold;
    text-align: center;
    font-family: 'Montserrat', sans-serif; }
  #login .logo svg {
    width: 45px;
    height: 82px;
    margin-top: -30px;
    vertical-align: middle; }
  #login .logo svg .st0 {
    fill: #fff; }
  #login .logo span {
    font-size: 1rem;
    font-weight: normal;
    color: rgba(255, 255, 255, 0.2); }

@media (max-width: 991px) {
  #login.success .logo-container {
    left: -100%; }
    #login.success .login-container {
      right: 100%; }
    #login .logo-container {
      width: 100%; }
    #login .logo-container:after {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      content: \"\";
      opacity: 0.4;
      position: absolute;
      background-size: cover;
      background-position: top, center;
      background-repeat: no-repeat, no-repeat;
      background-image: url('{{ image_path(\"theme::img/bg.svg\") }}'); }
    #login .logo-container .logo {
      display: none; }
    #login .login-container {
      width: 100%;
      background: none !important; }
    #login .login-container .login-wrapper {
      margin-top: 20vh; }
    #login .login-container .logo {
      margin-top: 0;
      line-height: 1;
      display: inherit;
      margin-bottom: 2rem; }
      #login .login-container .logo svg {
        width: 55px;
        height: 100px; } }

@media (max-width: 767px) {
  #login .login-container .login-wrapper {
    margin-top: 15vh;
    padding: 0 3rem; }
    #login .login-container .logo {
      margin-bottom: 4rem; } }

#installer {
  background-image: none; }
  #installer #main {
    margin: 0 !important;
    background-image: none; }
  #installer .logo {
    margin-top: 5rem;
    text-align: center; }
  #installer .logo svg {
    width: 55px;
    height: 100px;
    vertical-align: middle; }
  #installer .logo svg .st0 {
    transition: fill 50ms; }
", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/3816f79a1e3fa1d10a139ff0ae8be005.twig", "");
    }
}