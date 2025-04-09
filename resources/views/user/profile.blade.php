@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class=" ">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h4 class="mb-4 mb-md-0 card-title">Bienvenido</h4>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Bienvenido
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="card-body p-0 ">
                    <img src="../assets/images/backgrounds/profilebg.jpg" alt="matdash-img"width="100%" height="100px"
                        class="mg-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 order-lg-1 order-2">
                            <div class="d-flex align-items-center justify-content-around m-4">
                                {{-- <div class="text-center">
                  <i class="ti ti-file-description fs-6 d-block mb-2"></i>
                  <h4 class="mb-0 fw-semibold lh-1">938</h4>
                  <p class="mb-0 ">Posts</p>
                </div>
                <div class="text-center">
                  <i class="ti ti-user-circle fs-6 d-block mb-2"></i>
                  <h4 class="mb-0 fw-semibold lh-1">3,586</h4>
                  <p class="mb-0 ">Followers</p>
                </div>
                <div class="text-center">
                  <i class="ti ti-user-check fs-6 d-block mb-2"></i>
                  <h4 class="mb-0 fw-semibold lh-1">2,659</h4>
                  <p class="mb-0 ">Following</p>
                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                            <div class="mt-n5">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <div class="d-flex align-items-center justify-content-center round-110">
                                        <div
                                            class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                                            @if (Auth::user()->photo == '')
                                                <img src="../assets/images/profile/user-1.jpg" alt="matdash-img"
                                                    class="w-100 h-100">
                                            @else
                                                <img src="{{ asset('imageusers/' . Auth::user()->photo) }}" alt="matdash-img"
                                                    class="w-100 h-100">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h6 class="mb-0">{{ Auth::user()->names }} {{ Auth::user()->firstname }}
                                        {{ Auth::user()->lastname }}</h6>
                                    <p class="mb-0">{{ Auth::user()->getRoleNames()->implode(', ') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-last">
                            <ul
                                class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-4 gap-3">
                                {{-- <li>
                  <a class="d-flex align-items-center justify-content-center btn btn-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" width="30" height="30">
                    <i class="ti ti-brand-facebook"></i>
                  </a>
                </li>
                <li>
                  <a class="btn btn-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" href="javascript:void(0)">
                    <i class="ti ti-brand-dribbble"></i>
                  </a>
                </li>
                <li>
                  <a class="btn btn-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" href="javascript:void(0)">
                    <i class="ti ti-brand-youtube"></i>
                  </a>
                </li> --}}
                                {{-- <li>
                  <button class="btn btn-primary text-nowrap">Add To Story</button>
                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-primary-subtle rounded-2 rounded-top-0"
                        id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active hstack gap-2 rounded-0 fs-12 py-6" id="pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="true">
                                <i class="ti ti-user-circle fs-5"></i>
                                <span class="d-none d-md-block">Perfil</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link hstack gap-2 rounded-0 fs-12 py-6" id="pills-followers-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab"
                                aria-controls="pills-followers" aria-selected="false">
                                <i class="ti ti-heart fs-5"></i>
                                <span class="d-none d-md-block">Roles</span>
                            </button>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="row">

                        <div class="col-lg-4">
                            
                            <div class="card shadow-none border"style="height:100%">
                                <div class="card-body">
                                    <h4 class="mb-3 text-primary">Editar Datos</h4>
                                    <form action="" method="post" role="form" id="user" name="user"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
                                        @csrf
                                        Dni<input name="dni" type="number" class="form-control"
                                            value="{{Auth::user()->dni}}">
                                        Paterno<input name="firstname" type="text" class="form-control"value="{{Auth::user()->firstname}}">
                                        Materno<input name="lastname" type="text" class="form-control"value="{{Auth::user()->lastname}}">
                                        Nombres<input name="names" type="text" class="form-control"value="{{Auth::user()->names}}">
                                       
                                        Celular<input type="number" name="cellphone" class="form-control"
                                        value="{{Auth::user()->cellphone}}">
                                   
                                     
                                           
                             


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                            <div class="card shadow-none border"style="height:100%">
                                <div class="card-body">
                                    <h4 class="mb-3 text-primary">Cambiar Contraseña</h4>
                                   
                                      
                                       
                                    Contraseña<input type="password" name="password" class="form-control">
                                    <br>


                                    Sexo:
                                    @if (Auth::user()->sex == 'M')
                                    <div class="row text-center">
                                        <div class="col col-lg-6">
                                            Masculino :
                                            <input class="form-check-input" type="radio"name="sex" id="sex"value="M" checked>
                                        </div>
                                        <div class="col col-lg-6">
                                            Femenino
                                            <input class="form-check-input"  type="radio"name="sex" id="sex"value="F">
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            Masculino
                                            <input type="radio"name="sex" id="sex"value="M">
                                        </div>
                                        <div class="col col-lg-6">
                                            Femenino
                                            <input type="radio"name="sex" id="sex"value="F" checked>
                                        </div>
                                    </div>
                                @endif


                                        <br>
                                        Fecha de Nacimiento :
                                        <div class="row">
                                            <div class="col s4">
                                                <select name="day" class="form-control">
                                                    <option>Día</option>
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col s4">
                                                <select name="month" class="form-control">
                                                    <option>Mes</option>

                                                    <option value="1" selected="">Ene</option>
                                                    <option value="2">Feb</option>
                                                    <option value="3">Mar</option>
                                                    <option value="4">Abr</option>
                                                    <option value="5">May</option>
                                                    <option value="6">Jun</option>
                                                    <option value="7">Jul</option>
                                                    <option value="8">Ago</option>
                                                    <option value="9">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dic</option>
                                                </select>
                                            </div>
                                            <div class="col s4">
                                                <select name="year" class="form-control">
                                                    <option>Año</option>
                                                    <option value="2024" selected=""> 2024</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1919">1919</option>
                                                    <option value="1918">1918</option>
                                                    <option value="1917">1917</option>
                                                    <option value="1916">1916</option>
                                                    <option value="1915">1915</option>
                                                    <option value="1914">1914</option>
                                                    <option value="1913">1913</option>
                                                    <option value="1912">1912</option>
                                                    <option value="1911">1911</option>
                                                    <option value="1910">1910</option>
                                                    <option value="1909">1909</option>
                                                    <option value="1908">1908</option>
                                                    <option value="1907">1907</option>
                                                    <option value="1906">1906</option>
                                                    <option value="1905">1905</option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php echo '<script> user.day.value=' . substr(Auth::user()->datebirth, 8, 2) . ';</script>'; ?>
                                        <?php echo '<script> user.month.value=' . substr(Auth::user()->datebirth, 5, 2) . ';</script>'; ?>
                                        <?php echo '<script> user.year.value=' . substr(Auth::user()->datebirth, 0, 4) . ';</script>'; ?>
                                        <br>
                                        <div class="form-group row">
                                            Fotografía



                                            <input class="form-control" type="file" id="imgInp"
                                                name="photo" onchange="readImage(this,'#blah');">



                                        </div>
                                      
                          


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                            <div class="card shadow-none border"style="height:100%">
                                <div class="card-body">
                                    <h4 class="mb-3 text-primary">Cambiar foto</h4>
    
                                      
                                        <div class="size-100">
                                          
                                            <br>
                                            <div class="container text-center">
                                                @if (Auth::user()->photo=="")
                                                <img id="blah" name="fotografia" src="https://placehold.co/150"
                                                alt="Tu imagen" class="img-bordered" width="100%"height="100%">
                                                @else
                                                <img id="blah" name="fotografia" src="{{asset('imageusers/'.Auth::user()->photo)}}"
                                                alt="Tu imagen" class="img-bordered"  width="100%"height="100%">
                                                @endif
                                               
                                                </div>                                      
                                                    
                                        </div>
                                        <br>
                                           <button class="btn btn-primary"style="width:100%"onclick="userUpdateProfile();">Guardar</button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab"
                    tabindex="0">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-none border"style="height:100%">
                                <div class="card-body">
                                    <h4 class="mb-3 text-primary">Roles</h4>

                                    <p class="card-subtitle">
                                        @foreach (Auth::user()->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </p>


                                    <div class="vstack gap-3 mt-4">
                                        <h4 class="mb-3 text-primary">Permisos</h4>
                                        <div class="hstack gap-6">
                                            <i class="ti ti-briefcase text-dark fs-6"></i>
                                            <p class=" mb-0">
                                                @foreach (Auth::user()->getAllPermissions() as $permission)
                                                    {{ $permission->name }}
                                                @endforeach

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


            </div>

        </div>
    </div>
@endsection
