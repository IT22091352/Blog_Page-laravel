@extends('libraries/styles')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">


      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <h2 class="navbar-brand"  >CodeX Blog</h2>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

@push('css')
<style>
    .navbar-brand, .nav-link {
        font-size: 18px; /* Set your desired font size */
    }
    .navbar-brand{
        margin-top: 5px;
        color: rgb(81, 17, 163);
        font-size: 30px;
    }
</style>
@endpush
