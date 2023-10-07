<template>
<div>

    <header id="header">
        <div class="container" style="margin-bottom: -13px;">
            <router-link to="/second" style="text-decoration:none;">
                <a href="#" id="logo" title="Website For Essential Education">Website For Essential Education</a>
            </router-link>
            <div class="menu-trigger"></div>
            <nav id="menu">
                <ul style="padding-left: 35px !important;">
                    <li>
                        <router-link to="/student" style="text-decoration:none;">
                            <a href="#">Student</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/parent" style="text-decoration:none;">
                            <a href="#">Concerned Parent</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="teacher" style="text-decoration:none;">
                            <a href="#">Teacher</a>
                        </router-link>
                    </li>
                </ul>
                <ul>
                    <li>
                        <router-link to="principal" style="text-decoration:none;">
                            <a href="#">Principal</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="educationist" style="text-decoration:none;">
                            <a href="#">Educationist</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="publisher" style="text-decoration:none;">
                            <a href="#">Publisher</a>
                        </router-link>
                    </li>
                </ul>
            </nav>
            <!-- / navigation -->
        </div>
        <!-- / container -->

    </header>

    <div class="main">
        <keep-alive>
            <router-view></router-view>
        </keep-alive>
    </div>
</div>
</template>

<script>
export default {

}
</script>

<style>
::placeholder {
    /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    font-size: 16px;
    opacity: 1;
    /* Firefox */
}
</style>
