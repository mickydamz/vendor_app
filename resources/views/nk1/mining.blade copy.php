@extends('nk1/layouts/nk5layout')

@section('content')

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Projects</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 95 projects.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Open</span></a></li>
                                                                        <li><a href="#"><span>Closed</span></a></li>
                                                                        <li><a href="#"><span>Onhold</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Project</span></a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">

                                        <div class="col-sm-12 col-lg-6 col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                 <svg height="1000" viewBox="0 0 1000 1000" width="1000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="">
<style type="text/css">
	.miner11_st0{fill-rule:evenodd;clip-rule:evenodd;fill:#453E43;}
	.miner11_st1{fill-rule:evenodd;clip-rule:evenodd;fill:#786E79;}
	.miner11_st2{fill-rule:evenodd;clip-rule:evenodd;fill:#B1ABB5;}
	.miner11_st3{fill-rule:evenodd;clip-rule:evenodd;fill:#F0F0F3;}
	.miner11_st4{fill-rule:evenodd;clip-rule:evenodd;fill:#463E43;}
	.miner11_st5{fill:#453E43;}
	.miner11_st6{fill:#FBA615;}
	.miner11_st7{fill:#F88604;}
	.miner11_st8{fill-rule:evenodd;clip-rule:evenodd;fill:#786E78;}
	.miner11_st9{fill:#ACA5AD;}
	.miner11_st10{fill:#433B41;}
	.miner11_st11{fill-rule:evenodd;clip-rule:evenodd;fill:#FBA615;}
	.miner11_st12{fill-rule:evenodd;clip-rule:evenodd;fill:#F88604;}
	.miner11_st13{fill-rule:evenodd;clip-rule:evenodd;fill:#FFECCF;}
</style>
<path class="miner11_st0" d="M674.5,436.1v189.3c0,26.1-21.1,47.2-47.2,47.2H331.2v35h325.2c29.3,0,53.1-23.8,53.1-53.1V486
	C709.5,463,694.9,443.5,674.5,436.1"></path>
<path class="miner11_st1" d="M677,627.4V436.1c-5.6-2-11.8-3.2-18.2-3.2H331.2V675h298.3C655.7,675.1,677,653.7,677,627.4"></path>
<g>
	<path class="miner11_st2" d="M380.2,504.9c0-4.4,3.6-8,8-8h48.5c4.4,0,8,3.6,8,8s-3.6,8-8,8h-48.5C383.8,512.9,380.2,509.3,380.2,504.9"></path>
	<path class="miner11_st2" d="M380.2,536.8c0-4.4,3.6-8,8-8h48.5c4.4,0,8,3.6,8,8c0,4.4-3.6,8-8,8h-48.5
		C383.8,544.8,380.2,541.2,380.2,536.8"></path>
	<path class="miner11_st2" d="M380.2,568.7c0-4.4,3.6-8,8-8h48.5c4.4,0,8,3.6,8,8c0,4.4-3.6,8-8,8h-48.5
		C383.8,576.7,380.2,573.1,380.2,568.7"></path>
	<path class="miner11_st2" d="M380.2,600.7c0-4.4,3.6-8,8-8h48.5c4.4,0,8,3.6,8,8c0,4.4-3.6,8-8,8h-48.5C383.8,608.7,380.2,605,380.2,600.7"></path>
	<path class="miner11_st2" d="M549.4,481.7c39.3,0,71.1,31.8,71.1,71.1c0,39.3-31.8,71.1-71.1,71.1c-39.3,0-71.1-31.8-71.1-71.1
		C478.3,513.5,510.1,481.7,549.4,481.7"></path>
</g>
<g>
	<path class="miner11_st2" d="M618,552.1v0.3c0,0.9,0,1.8-0.1,2.7c0,1.5-0.2,2.9-0.3,4.4c-0.1,1-0.2,2-0.4,3c-0.2,1.5-0.5,3-0.8,4.4
		c-0.2,1-0.4,2-0.7,3c-0.4,1.5-0.8,3-1.3,4.4c-0.3,1-0.7,2-1.1,3c-0.6,1.5-1.2,3-1.9,4.4c-0.5,1-1,2-1.5,3c-0.8,1.5-1.6,3-2.5,4.4
		c-0.6,1-1.3,2-2,3c-1.1,1.5-2.2,3-3.3,4.4c-0.9,1-1.7,2-2.6,3c-1.4,1.5-2.9,3-4.5,4.4c-1.1,1-2.3,2-3.5,3c-0.8,0.6-1.6,1.2-2.4,1.8
		c-1.3,0.9-2.6,1.8-3.9,2.6c-1.2,0.7-2.4,1.5-3.7,2.1c-0.5,0.3-1.1,0.6-1.6,0.8c-3.5,1.8-7.2,3.3-11.1,4.4c-4,1.2-8.2,2-12.4,2.5
		c-2.4,0.2-4.8,0.4-7.2,0.4s-4.9-0.1-7.2-0.4c-4.3-0.4-8.4-1.3-12.4-2.5c-3.9-1.1-7.6-2.6-11.1-4.4l-1.6-0.8
		c-1.3-0.7-2.5-1.4-3.7-2.1c-1.3-0.8-2.6-1.7-3.9-2.6c-0.8-0.6-1.6-1.2-2.4-1.8c-1.2-1-2.4-1.9-3.5-3c-1.6-1.4-3.1-2.9-4.5-4.4
		c-0.9-1-1.8-2-2.6-3c-1.2-1.4-2.3-2.9-3.3-4.4c-0.7-1-1.4-2-2-3c-0.9-1.4-1.7-2.9-2.5-4.4c-0.5-1-1-2-1.5-3
		c-0.7-1.4-1.3-2.9-1.9-4.4c-0.4-1-0.7-2-1.1-3c-0.5-1.5-0.9-2.9-1.3-4.4c-0.3-1-0.5-2-0.7-3c-0.3-1.4-0.6-2.9-0.8-4.4
		c-0.1-1-0.3-2-0.4-3c-0.2-1.5-0.3-2.9-0.3-4.4c0-0.9-0.1-1.8-0.1-2.7v-0.3c0-1.5,0.1-2.9,0.2-4.4c0.1-1,0.1-2,0.3-3
		c0.2-1.5,0.4-3,0.6-4.4c0.2-1,0.4-2,0.6-3c0.3-1.5,0.7-3,1.1-4.4c0.3-1,0.6-2,0.9-3c0.5-1.5,1.1-3,1.7-4.4c0.4-1,0.9-2,1.3-3
		c0.7-1.5,1.5-3,2.3-4.4c0.6-1,1.2-2,1.8-3c1-1.5,2-3,3.1-4.4c0.8-1,1.6-2,2.4-3c1.3-1.5,2.6-3,4-4.4c1-1,2.1-2,3.2-3
		c1.7-1.5,3.5-2.9,5.3-4.2c0.1-0.1,0.2-0.1,0.2-0.2c1.5-1.1,3-2,4.5-3c0.9-0.6,1.9-1.1,2.8-1.6c1.9-1,3.9-2,5.9-2.8
		c2.8-1.2,5.7-2.2,8.7-3c3.4-0.9,7-1.6,10.6-2c2.4-0.2,4.8-0.4,7.2-0.4s4.9,0.1,7.2,0.4c3.6,0.4,7.2,1,10.6,2c3,0.8,5.9,1.8,8.7,3
		c2,0.8,4,1.8,5.9,2.8c1,0.5,1.9,1,2.8,1.6c1.6,0.9,3.1,1.9,4.5,3c0.1,0.1,0.2,0.1,0.2,0.2c1.8,1.3,3.6,2.7,5.3,4.2
		c1.1,1,2.2,2,3.2,3c1.4,1.4,2.8,2.9,4.1,4.4c0.8,1,1.6,2,2.4,3c1.1,1.4,2.1,2.9,3.1,4.4c0.6,1,1.2,2,1.8,3c0.8,1.4,1.6,2.9,2.3,4.4
		c0.5,1,0.9,2,1.3,3c0.6,1.4,1.2,2.9,1.7,4.4c0.3,1,0.7,2,0.9,3c0.4,1.4,0.8,2.9,1.1,4.4c0.2,1,0.4,2,0.6,3c0.3,1.5,0.5,2.9,0.6,4.4
		c0.1,1,0.2,2,0.3,3C617.9,549.2,617.9,550.7,618,552.1z"></path>
	<path class="miner11_st3" d="M575.6,488.8h-53.1c2.8-1.2,5.7-2.2,8.7-3h35.7C569.9,486.6,572.8,487.6,575.6,488.8z"></path>
	<path class="miner11_st3" d="M588.9,496.2h-79.6c1.5-1.1,3-2,4.5-3h70.6C585.9,494.1,587.4,495.1,588.9,496.2z"></path>
	<path class="miner11_st3" d="M597.6,503.5h-97.1c1-1,2.1-2,3.2-3h90.8C595.5,501.5,596.6,502.5,597.6,503.5z"></path>
	<path class="miner11_st3" d="M604.1,510.9h-110c0.8-1,1.6-2,2.4-3h105.2C602.5,508.9,603.3,509.9,604.1,510.9z"></path>
	<path class="miner11_st3" d="M608.9,518.3H489.2c0.6-1,1.2-2,1.8-3h116.1C607.7,516.3,608.3,517.3,608.9,518.3z"></path>
	<path class="miner11_st3" d="M612.6,525.6h-127c0.4-1,0.9-2,1.3-3h124.3C611.7,523.7,612.1,524.6,612.6,525.6z"></path>
	<path class="miner11_st3" d="M615.2,533H482.9c0.3-1,0.6-2,0.9-3h130.4C614.6,531,614.9,532,615.2,533z"></path>
	<path class="miner11_st3" d="M616.9,540.4H481.2c0.2-1,0.4-2,0.6-3h134.5C616.5,538.4,616.7,539.4,616.9,540.4z"></path>
	<path class="miner11_st3" d="M617.8,547.7H480.3c0.1-1,0.1-2,0.3-3h136.9C617.6,545.8,617.7,546.7,617.8,547.7z"></path>
	<path class="miner11_st3" d="M618,552.1v0.3c0,0.9,0,1.8-0.1,2.7H480.2c0-0.9-0.1-1.8-0.1-2.7v-0.3H618z"></path>
	<path class="miner11_st3" d="M617.6,559.5c-0.1,1-0.2,2-0.4,3H480.9c-0.1-1-0.3-2-0.4-3H617.6z"></path>
	<path class="miner11_st3" d="M616.4,566.9c-0.2,1-0.4,2-0.7,3H482.4c-0.3-1-0.5-2-0.7-3H616.4z"></path>
	<path class="miner11_st3" d="M614.4,574.2c-0.3,1-0.7,2-1.1,3H484.8c-0.4-1-0.7-2-1.1-3H614.4z"></path>
	<path class="miner11_st3" d="M611.5,581.6c-0.5,1-1,2-1.5,3H488.1c-0.5-1-1-2-1.5-3H611.5z"></path>
	<g>
		<path class="miner11_st3" d="M607.5,589c-0.6,1-1.3,2-2,3H492.6c-0.7-1-1.4-2-2-3H607.5z"></path>
	</g>
	<path class="miner11_st3" d="M602.1,596.3c-0.9,1-1.7,2-2.6,3H498.6c-0.9-1-1.8-2-2.6-3H602.1z"></path>
	<path class="miner11_st3" d="M595,603.7c-1.1,1-2.3,2-3.5,3h-84.9c-1.2-1-2.4-1.9-3.5-3H595z"></path>
	<path class="miner11_st3" d="M585.2,611.1c-1.2,0.7-2.4,1.5-3.7,2.1c-0.5,0.3-1.1,0.6-1.6,0.8h-61.6l-1.6-0.8c-1.3-0.7-2.5-1.4-3.7-2.1
		H585.2z"></path>
	<path class="miner11_st3" d="M556.3,620.9c4.3-0.4,8.4-1.3,12.4-2.5h-12.4h-14.5h-12.4c4,1.2,8.2,2,12.4,2.5H556.3z"></path>
	<path class="miner11_st3" d="M559.7,483.9v137h-21.2v-137c3.5-0.2,7-0.4,10.6-0.4S556.2,483.6,559.7,483.9z"></path>
	<g>
		<path class="miner11_st2" d="M509,496.4v4.2v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v1.8
			l3.9,2.6c1.2,0.7,2.4,1.5,3.7,2.1v-2.1v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3V533v-3
			v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-1.6c-1,0.5-1.9,1-2.8,1.6c-1.6,0.9-3.1,1.9-4.5,3L509,496.4z"></path>
		<path class="miner11_st2" d="M588.9,496.2c-1.5-1.1-3-2-4.5-3c-0.9-0.6-1.9-1.1-2.8-1.6v1.6v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3
			v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v3v4.4v2.1c1.3-0.7,2.5-1.4,3.7-2.1c1.3-0.8,2.6-1.7,3.9-2.6v-1.8v-3v-4.4v-3v-4.4
			v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3V533v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.4v-3v-4.2L588.9,496.2z"></path>
	</g>
</g>
<path class="miner11_st4 miner_animate_spin_linear miner_animate_spin_speed1" d="M487.9,569.2c7.8-7.7,18.2-12.1,29.3-12.1c4.6,0,9,0.7,13.3,2.2c-4.1,2.4-7.9,5.4-11.4,8.8
	c-8,8-13.3,18.1-15.5,28.9C496.2,589.3,490.7,579.8,487.9,569.2 M610.9,536.5c-7.8,7.7-18.2,12.1-29.3,12.1c-4.6,0-9-0.7-13.3-2.2
	c4.1-2.4,7.9-5.4,11.4-8.8c8-8,13.3-18.1,15.5-28.9C602.6,516.4,608.1,525.9,610.9,536.5 M569.1,527c-3.2,3.2-6.9,5.9-10.9,7.9
	c1.2-4.6,1.8-9.4,1.8-14.3c0-11.3-3.4-22.2-9.5-31.4c11.2,0.2,21.7,3.3,30.8,8.6C581.3,508.7,576.9,519.2,569.1,527 M533,491.3
	c7.7,7.8,12.1,18.2,12.1,29.3c0,4.6-0.7,9-2.2,13.3c-2.4-4.1-5.4-7.9-8.8-11.4c-8-8-18.1-13.3-28.9-15.5
	C512.9,499.6,522.4,494.1,533,491.3 M494.4,520.9c10.9,0.1,21.4,4.4,29.2,12.2c3.2,3.2,5.9,6.9,7.9,10.9c-4.6-1.2-9.4-1.8-14.3-1.8
	c-11.3,0-22.2,3.4-31.4,9.5C486,540.4,489.1,530,494.4,520.9 M529.6,578.6c3.2-3.2,6.9-5.9,10.9-7.9c-1.2,4.6-1.8,9.4-1.8,14.3
	c0,11.3,3.4,22.2,9.5,31.4c-11.2-0.2-21.7-3.3-30.8-8.6C517.5,596.9,521.8,586.4,529.6,578.6 M565.7,614.3
	c-7.7-7.8-12.1-18.2-12.1-29.3c0-4.6,0.7-9,2.2-13.3c2.4,4.1,5.4,7.9,8.8,11.4c8,8,18,13.3,28.9,15.5
	C585.8,606,576.3,611.5,565.7,614.3 M604.4,584.8c-10.9-0.1-21.4-4.4-29.2-12.2c-3.2-3.2-5.9-6.9-7.9-10.9c4.6,1.2,9.4,1.8,14.3,1.8
	c11.3,0,22.2-3.4,31.4-9.5C612.8,565.2,609.7,575.7,604.4,584.8 M549.4,474.2c-43.4,0-78.6,35.3-78.6,78.6
	c0,43.3,35.3,78.6,78.6,78.6c43.4,0,78.6-35.3,78.6-78.6C628,509.5,592.7,474.2,549.4,474.2"></path>
<path class="miner11_st3" d="M549.4,531.5c11.8,0,21.3,9.5,21.3,21.3c0,11.8-9.5,21.3-21.3,21.3s-21.3-9.5-21.3-21.3
	C528.1,541,537.6,531.5,549.4,531.5"></path>
<path class="miner11_st2" d="M558.3,533.5c1.3,2.7,2,5.7,2,8.9c0,11.8-9.6,21.3-21.3,21.3c-3.2,0-6.2-0.7-8.9-2c3.4,7.3,10.8,12.4,19.4,12.4
	c11.8,0,21.3-9.6,21.3-21.3C570.7,544.2,565.6,536.8,558.3,533.5"></path>
<g>
	<path class="miner11_st5" d="M389.5,719.8v-19.7h238.8v8.2h-11.1l2.1,5.4h-15.9l0-1c0.1-2-1.5-3.6-3.5-3.6h0c-1.9,0-3.4,1.6-3.4,3.5v7.2
		H443.2v-7.2c0-1.4-1.2-2.6-2.6-2.6l0,0c-1.4,0-2.6,1.2-2.6,2.6v7.2h-23v-11.5h-8.5v11.5H389.5z"></path>
	<path class="miner11_st6" d="M603.5,713.7v9.3h21.7c2.9,0,5.3-2.4,5.3-5.3v-4.8L603.5,713.7z"></path>
	<rect x="443.2" y="719.8" class="miner11_st7" width="153.4" height="9.3"></rect>
	<rect x="415.1" y="719.8" class="miner11_st7" width="23" height="8.6"></rect>
</g>
<g>
	<path class="miner11_st5" d="M318.2,458.3v298h41.5v-33.8h-16.2c-6.6,0-12-5.2-12-11.6V458.3H318.2z"></path>
	<path class="miner11_st8" d="M304.2,625.5h-18.8c-4.8,0-8.5-3.8-8.5-8.5v-96.3c0-4.8,3.8-8.5,8.5-8.5h18.8V625.5z"></path>
	<path class="miner11_st2" d="M289.5,573.1v-65.7h-9c-4.8,0-8.4,3.8-8.4,8.6V591C281.7,591,289.5,583,289.5,573.1"></path>
	<path class="miner11_st2" d="M318.2,401.4C318.2,401.4,318.2,401.4,318.2,401.4l0-0.1c0-2.8-1.4-5.3-3.5-6.7c-1.3-0.9-2.9-1.5-4.6-1.5
		h-34.3c-4.5,0-8.1,3.7-8.1,8.3s3.5,8.3,8,8.3h26.4v347.1c0,4.5,3.5,8.1,7.9,8.1h0.3c4.5,0,8-3.6,7.9-8.1L318.2,401.4
		C318.2,401.4,318.2,401.4,318.2,401.4"></path>
</g>
<g>
	<circle class="miner11_st9" cx="339" cy="738.9" r="9.9"></circle>
	<path class="miner11_st10" d="M339.8,731.8l0.5,5.8l5.6,0.5v1.6l-5.6,0.5l-0.5,5.9h-1.7l-0.5-5.9l-5.6-0.5v-1.6l5.6-0.5l0.5-5.8H339.8z"></path>
</g>
<g class="miner_animate_levitation">
	<path class="miner11_st11" d="M507.2,304c18.6,0,33.6,15.1,33.6,33.6c0,18.6-15.1,33.6-33.6,33.6c-18.6,0-33.6-15.1-33.6-33.6
		C473.5,319.1,488.6,304,507.2,304"></path>
	<path class="miner11_st12" d="M521.4,307.3c2,4.4,3.2,9.2,3.2,14.2c0,18.5-15,33.6-33.6,33.6c-5.1,0-10-1.2-14.2-3.2
		c5.3,11.4,17,19.3,30.4,19.3c18.5,0,33.6-15,33.6-33.6C540.7,324.3,532.8,312.6,521.4,307.3"></path>
	<path class="miner11_st13" d="M508,303.7c-14.7,0-26.6,11.9-26.6,26.6c0,14.7,11.9,26.6,26.6,26.6c14.7,0,26.6-11.9,26.6-26.6
		C534.6,315.6,522.8,303.7,508,303.7 M508,371.5c-22.7,0-41.2-18.5-41.2-41.2s18.5-41.2,41.2-41.2c22.7,0,41.2,18.5,41.2,41.2
		C549.3,353.1,530.8,371.5,508,371.5"></path>
</g>
<g class="miner_animate_levitation miner_animate_levitation_small">
	<path class="miner11_st11" d="M637,330.4c37.1,0,67.1,30.1,67.1,67.1c0,37.1-30.1,67.1-67.1,67.1c-37.1,0-67.1-30.1-67.1-67.1
		C569.9,360.4,599.9,330.4,637,330.4"></path>
	<path class="miner11_st12" d="M671.8,340c6.2,10.2,9.7,22.1,9.7,34.8c0,37.1-30,67.1-67.1,67.1c-12.7,0-24.6-3.6-34.8-9.7
		c11.8,19.4,33.1,32.4,57.5,32.4c37.1,0,67.1-30,67.1-67.1C704.1,373.1,691.2,351.8,671.8,340"></path>
	<path class="miner11_st13" d="M637,323.1c-41,0-74.4,33.4-74.4,74.4s33.4,74.4,74.4,74.4c41,0,74.4-33.4,74.4-74.4S678,323.1,637,323.1z
		 M637,457.3c-33,0-59.9-26.8-59.9-59.9c0-33,26.8-59.9,59.9-59.9c33.1,0,59.9,26.8,59.9,59.9C696.9,430.4,670,457.3,637,457.3z"></path>
	<path class="miner11_st13" d="M641.7,415.4h-10v-12.7h10c3.5,0,6.4,2.8,6.4,6.4C648,412.6,645.2,415.4,641.7,415.4z M639.1,379.5
		c2.4,0,4.4,1.9,4.4,4.4s-1.9,4.4-4.4,4.4h-7.5v-8.8L639.1,379.5z M655.4,393.4c1.6-2.8,2.6-6.1,2.6-9.6c0-10.4-8.4-18.9-18.9-18.9
		h-14.6c-4,0-7.3,3.3-7.3,7.3v50.6c0,1.9,0.8,3.8,2.1,5.1c1.4,1.4,3.2,2.1,5.1,2.1c0,0,13.5-0.1,17.2-0.1c11.5,0,20.8-9.4,20.8-20.8
		C662.6,402.8,659.8,397.2,655.4,393.4L655.4,393.4z"></path>
</g>
</svg>
                                                                <div style="background: #F1F5FD;" class=" col-5 p-4 text-left text-dark">
                                                                <span class="sub-text">Daily income </span>

                                                                    <span style="font-size: 2rem; color:#307AFC" class="text-lg">$56</span>

                                                                    <span class="sub-text">Weekly income</span>

                                                                    <span style="font-size: 2rem; color:#307AFC" class="text-lg">$56</span>

                                                                    <span class="sub-text">Monthly income</span>

                                                                    <span style="font-size: 2rem; color:#307AFC" class="text-lg">$56</span>

                                                                    
                                                                </div>
                                                            </a>
                                                            <!-- <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <!-- <div class="project-details">
                                                            <p>Design the website for Runnergy main website including their user dashboard.</p>
                                                        </div> -->
                                                        <div class="project-progress">
                                                            <!-- <div class="project-progress-details">
                                                                <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>25 Tasks</span></div>
                                                                <div class="project-progress-percent">23%</div>
                                                            </div> -->
                                                            <!-- <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="23"></div>
                                                            </div> -->
                                                            <div class="form-group">
                                                            <label class="form-label">Default Range Slider</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-control-slider" data-orientation="horizontal" data-start="30" id="vertical-Default-Range"></div>
                                                            </div>
                                                            
                                                            <label style="visibility:hidden" class="form-label" for="default-04">Input with Icon Right</label>
                                                                <div class="row pl-4">
                                                                    
                                                                    <input type="text" class="col-5 form-control" id="default-04" placeholder="Input placeholder">
                                                                     <p style="visibility:hidden">56 </p>
                                                                    <input type="text" class="col-5 form-control" id="default-04" placeholder="Input placeholder">
                                                                </div>

                                                            
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <div class="project-meta pr-2 pl-2">
                                                        <span class="badge badge-dim badge-light text-gray"><em class="icon ni ni-check"></em><span>21 Days Left</span></span>
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    
                                                                    <div class="pl-5 pr-5 btn btn-primary">BUY</div>
                                                                </li>
                                                                <li style="visibility:hidden">
                                                                    <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                                </li>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 <a href="https://mining.bitkoinix.com" target="_blank">Bitkoinix</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    @endsection