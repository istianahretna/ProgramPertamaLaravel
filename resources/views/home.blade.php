<style>
*{
    background: #DFE5E9;
}
.home{
    text-align: center;
    position: relative;
    left: 0%;
    top:  50%;
    font-size: 23px;

}
</style>

<div class="home">Selamat datang , {{ Auth::user()->name}} anda sudah login.
<br>
<a href="{{ route('logout')}}">Log Out</a>
</div>

