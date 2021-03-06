@extends('admin.layout.app')

@section('content')
	<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			
											<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

<div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
	<!-- BEGIN: Aside Menu -->
	<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		m-menu-vertical="1"
		 m-menu-scrollable="1" m-menu-dropdown-timeout="500"  
		style="position: relative;">		
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item " aria-haspopup="true" ><a  href="index9bfb.html?page=index&amp;demo=default" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">Dashboard</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span>  </span></span></a></li><li class="m-menu__section ">
                <h4 class="m-menu__section-text">Components</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd68c.html?page=components/base/state&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">State Colors</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4b55.html?page=components/base/typography&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typography</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index762e.html?page=components/base/stack&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Stack</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index70fa.html?page=components/base/tables&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tables</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9c73.html?page=components/base/progress&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Progress</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4c34.html?page=components/base/modal&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Modal</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd2bb.html?page=components/base/alerts&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Alerts</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd729.html?page=components/base/popover&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Popover</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index5e77.html?page=components/base/tooltip&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tooltip</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb2f8.html?page=components/base/blockui&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Block UI</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index68d9.html?page=components/base/spinners&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Spinners</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexbc58.html?page=components/base/scrollable&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexbd9f.html?page=components/base/dropdown&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropdown</span></a></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tabs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index1f9d.html?page=components/base/tabs/bootstrap&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Tabs</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index64cb.html?page=components/base/tabs/line&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Line Tabs</span></a></li></ul></div></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index6e4a.html?page=components/base/accordions&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Accordions</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index363a.html?page=components/base/navs&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Navs</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index8d6b.html?page=components/base/lists&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lists</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4452.html?page=components/base/treeview&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tree View</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index78ac.html?page=components/base/bootstrap-notify&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Notify</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexad9a.html?page=components/base/toastr&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Toastr</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index0dbd.html?page=components/base/sweetalert2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">SweetAlert2</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Icons</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb4bb.html?page=components/icons/flaticon&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexfb20.html?page=components/icons/fontawesome5&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome 5</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9b69.html?page=components/icons/lineawesome&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa2ac.html?page=components/icons/socicons&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Socicons</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-web"></i><span class="m-menu__link-text">Buttons</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index8f18.html?page=components/buttons/base/default&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default Style</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexbcd9.html?page=components/buttons/base/square&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Square Style</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index6c27.html?page=components/buttons/base/pill&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pill Style</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index57af.html?page=components/buttons/base/air&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Air Style</span></a></li></ul></div></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexea05.html?page=components/buttons/group&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Group</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4259.html?page=components/buttons/dropdown&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Dropdown</span></a></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Icon</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa96d.html?page=components/buttons/icon/lineawesome&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome Icons</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index8e01.html?page=components/buttons/icon/fontawesome&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome Icons</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb319.html?page=components/buttons/icon/flaticon&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon Icons</span></a></li></ul></div></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">Portlets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Portlets</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index7cd6.html?page=components/portlets/base&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Portlets</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index3417.html?page=components/portlets/advanced&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced Portlets</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index5e78.html?page=components/portlets/creative&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Creative Portlets</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexc614.html?page=components/portlets/tabbed&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tabbed Portlets</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index8f4f.html?page=components/portlets/draggable&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Draggable Portlets</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4a4c.html?page=components/portlets/tools&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Portlet Tools</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4963.html?page=components/portlets/sticky-head&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky Head</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-6"></i><span class="m-menu__link-text">Timeline</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Timeline</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd43d.html?page=components/timeline/timeline-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 1</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index5be0.html?page=components/timeline/timeline-2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 2</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Widgets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Widgets</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9e5e.html?page=components/widgets/general&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">General Widgets</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexadf5.html?page=components/widgets/chart&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Chart Widgets</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-calendar"></i><span class="m-menu__link-text">Calendar</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Calendar</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa631.html?page=components/calendar/basic&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Calendar</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa3d2.html?page=components/calendar/list-view&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">List Views</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index63b8.html?page=components/calendar/google&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Calendar</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexf25d.html?page=components/calendar/external-events&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">External Events</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index80c1.html?page=components/calendar/background-events&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Background Events</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-text">Charts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Charts</span></span></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa0f1.html?page=components/charts/amcharts/charts&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts Charts</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index11c8.html?page=components/charts/amcharts/stock-charts&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts Stock Charts</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4d61.html?page=components/charts/amcharts/maps&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts Maps</span></a></li></ul></div></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4252.html?page=components/charts/flotcharts&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flot Charts</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index2649.html?page=components/charts/google-charts&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Charts</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index3c90.html?page=components/charts/morris-charts&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Morris Charts</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-placeholder-1"></i><span class="m-menu__link-text">Maps</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Maps</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index3924.html?page=components/maps/google-maps&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Maps</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index0bec.html?page=components/maps/jqvmap&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JQVMap</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-signs-2"></i><span class="m-menu__link-text">Utils</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Utils</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb3f2.html?page=components/utils/session-timeout&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Session Timeout</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexe4cb.html?page=components/utils/idle-timer&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Idle Timer</span></a></li></ul></div></li><li class="m-menu__section ">
                <h4 class="m-menu__section-text">CRUD</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-7"></i><span class="m-menu__link-text">Forms & Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Forms & Controls</span></span></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index2eec.html?page=crud/forms/controls/base&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Inputs</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index5448.html?page=crud/forms/controls/checkbox-radio&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Checkbox & Radio</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa8ed.html?page=crud/forms/controls/input-group&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input Groups</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index0c64.html?page=crud/forms/controls/switch&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexba1d.html?page=crud/forms/controls/option&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Mega Options</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Widgets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index314a.html?page=crud/forms/widgets/bootstrap-datepicker&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datepicker</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index1253.html?page=crud/forms/widgets/bootstrap-datetimepicker&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datetimepicker</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index428a.html?page=crud/forms/widgets/bootstrap-timepicker&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timepicker</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexffa0.html?page=crud/forms/widgets/bootstrap-daterangepicker&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Daterangepicker</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd2f9.html?page=crud/forms/widgets/bootstrap-touchspin&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Touchspin</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexf6ad.html?page=crud/forms/widgets/bootstrap-maxlength&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Maxlength</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index42b7.html?page=crud/forms/widgets/bootstrap-switch&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index5dff.html?page=crud/forms/widgets/bootstrap-multipleselectsplitter&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple Select Splitter</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd287.html?page=crud/forms/widgets/bootstrap-select&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Select</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index94e9.html?page=crud/forms/widgets/select2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select2</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index207d.html?page=crud/forms/widgets/typeahead&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typeahead</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index012e.html?page=crud/forms/widgets/nouislider&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">noUiSlider</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index37a1.html?page=crud/forms/widgets/form-repeater&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Repeater</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9d3c.html?page=crud/forms/widgets/ion-range-slider&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ion Range Slider</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexff8e.html?page=crud/forms/widgets/input-mask&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input Masks</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd848.html?page=crud/forms/widgets/summernote&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Summernote WYSIWYG</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb08d.html?page=crud/forms/widgets/bootstrap-markdown&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Markdown Editor</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexf281.html?page=crud/forms/widgets/autosize&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Autosize</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index6e0f.html?page=crud/forms/widgets/clipboard&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Clipboard</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index7222.html?page=crud/forms/widgets/dropzone&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropzone</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index95ad.html?page=crud/forms/widgets/recaptcha&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google reCaptcha</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Layouts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexd326.html?page=crud/forms/layouts/default-forms&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default Forms</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4e49.html?page=crud/forms/layouts/multi-column-forms&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multi Column Forms</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index78e8.html?page=crud/forms/layouts/action-bars&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Action Bars</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexe076.html?page=crud/forms/layouts/sticky-action-bar&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky Action Bar</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Validation</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexbba2.html?page=crud/forms/validation/states&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Validation States</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index0c5f.html?page=crud/forms/validation/form-controls&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Controls</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index1cc3.html?page=crud/forms/validation/form-widgets&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Widgets</span></a></li></ul></div></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-8"></i><span class="m-menu__link-text">Metronic Wizard</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index888f.html?page=crud/wizard/wizard-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 1</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb891.html?page=crud/wizard/wizard-2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 2</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9ea3.html?page=crud/wizard/wizard-3&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 3</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index48c3.html?page=crud/wizard/wizard-4&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 4</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexeaf0.html?page=crud/wizard/wizard-5&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 5</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-tabs"></i><span class="m-menu__link-text">Metronic Datatable</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Metronic Datatable</span></span></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index418e.html?page=crud/metronic-datatable/base/data-local&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local Data</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index69ab.html?page=crud/metronic-datatable/base/data-json&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JSON Data</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9fdf.html?page=crud/metronic-datatable/base/data-ajax&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax Data</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index7da1.html?page=crud/metronic-datatable/base/html-table&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML Table</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index286e.html?page=crud/metronic-datatable/base/record-selection&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Record Selection</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index4a54.html?page=crud/metronic-datatable/base/local-sort&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local Sort</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index8f2d.html?page=crud/metronic-datatable/base/row-details&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row Details</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index60c2.html?page=crud/metronic-datatable/base/column-rendering&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column Rendering</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index3a07.html?page=crud/metronic-datatable/base/column-width&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column Width</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexbdf5.html?page=crud/metronic-datatable/base/responsive-columns&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive Columns</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9606.html?page=crud/metronic-datatable/base/translation&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Translation</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrolling</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index0924.html?page=crud/metronic-datatable/scrolling/vertical&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Vertical Scrolling</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexff71.html?page=crud/metronic-datatable/scrolling/horizontal&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Horizontal Scrolling</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index795a.html?page=crud/metronic-datatable/scrolling/both&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both Scrolling</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Locked Columns</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index7dee.html?page=crud/metronic-datatable/locked/left&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Left Locked Columns</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index35f4.html?page=crud/metronic-datatable/locked/right&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Right Locked Columns</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexc5b9.html?page=crud/metronic-datatable/locked/both&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both Locked Columns</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexcf4e.html?page=crud/metronic-datatable/locked/html-table&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML Table</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Child Datatables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexecfa.html?page=crud/metronic-datatable/child/data-local&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local Data</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index794d.html?page=crud/metronic-datatable/child/data-ajax&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Remote Data</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">API</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexe7cf.html?page=crud/metronic-datatable/api/methods&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">API Methods</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexdfd9.html?page=crud/metronic-datatable/api/events&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Events</span></a></li></ul></div></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list-3"></i><span class="m-menu__link-text">DataTables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">DataTables</span></span></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index0342.html?page=crud/datatables/basic/basic&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Tables</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index58e8.html?page=crud/datatables/basic/scrollable&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable Tables</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexfd51.html?page=crud/datatables/basic/headers&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Complex Headers</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index0443.html?page=crud/datatables/basic/paginations&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pagination Options</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa838.html?page=crud/datatables/advanced/column-rendering&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column Rendering</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index5335.html?page=crud/datatables/advanced/multiple-controls&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple Controls</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexec8c.html?page=crud/datatables/advanced/column-visibility&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column Visibility</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index2c21.html?page=crud/datatables/advanced/row-callback&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row Callback</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index1b9f.html?page=crud/datatables/advanced/row-grouping&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row Grouping</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index47be.html?page=crud/datatables/advanced/footer-callback&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer Callback</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Data sources</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index0c25.html?page=crud/datatables/data-sources/html&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb73f.html?page=crud/datatables/data-sources/javascript&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Javascript</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb906.html?page=crud/datatables/data-sources/ajax-client-side&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax Client-side</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index3839.html?page=crud/datatables/data-sources/ajax-server-side&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax Server-side</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Search Options</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a  href="index49c0.html?page=crud/datatables/search-options/column-search&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column Search</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexeafe.html?page=crud/datatables/search-options/advanced-search&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced Search</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Extensions</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--active" aria-haspopup="true" ><a  href="indexafa9.html?page=crud/datatables/extensions/buttons&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Buttons</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index3f0d.html?page=crud/datatables/extensions/colreorder&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">ColReorder</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexc9b5.html?page=crud/datatables/extensions/keytable&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">KeyTable</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa5aa.html?page=crud/datatables/extensions/responsive&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexa67e.html?page=crud/datatables/extensions/rowgroup&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowGroup</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexc5e5.html?page=crud/datatables/extensions/rowreorder&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowReorder</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexdf21.html?page=crud/datatables/extensions/scroller&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scroller</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index54b5.html?page=crud/datatables/extensions/select&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select</span></a></li></ul></div></li></ul></div></li><li class="m-menu__section ">
                <h4 class="m-menu__section-text">Tools</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li><li class="m-menu__item " aria-haspopup="true" ><a  href="index2b54.html?page=builder&amp;demo=default" class="m-menu__link "><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Layout Builder</span></a></li><li class="m-menu__section ">
                <h4 class="m-menu__section-text">Snippets</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-9"></i><span class="m-menu__link-text">Pricing Tables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Pricing Tables</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexc13e.html?page=snippets/general/pricing-tables/pricing-table-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing Tables v1</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexc559.html?page=snippets/general/pricing-tables/pricing-table-2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing Tables v2</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index58f3.html?page=snippets/general/pricing-tables/pricing-table-3&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing Tables v3</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb425.html?page=snippets/general/pricing-tables/pricing-table-4&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing Tables v4</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-piggy-bank"></i><span class="m-menu__link-text">Invoices</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Invoices</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexb44a.html?page=snippets/invoices/invoice-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v1</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a  href="index9535.html?page=snippets/invoices/invoice-2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v2</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-exclamation"></i><span class="m-menu__link-text">FAQS</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">FAQS</span></span></li><li class="m-menu__item " aria-haspopup="true" ><a  href="indexf37a.html?page=snippets/faq/faq-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">FAQ v1</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">Custom Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Custom Pages</span></span></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">User Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="indexb101.html?page=snippets/pages/user/login-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login - 1</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index9f82.html?page=snippets/pages/user/login-2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login - 2</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="indexdc3f.html?page=snippets/pages/user/login-3&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login - 3</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index88c1.html?page=snippets/pages/user/login-4&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login - 4</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index19fc.html?page=snippets/pages/user/login-5&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login - 5</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index3cd9.html?page=snippets/pages/user/login-6&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login - 6</span></a></li></ul></div></li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a><div class="m-menu__submenu "><span class="m-menu__arrow"></span><ul class="m-menu__subnav"><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="indexeae8.html?page=snippets/pages/errors/error-1&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error 1</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index6346.html?page=snippets/pages/errors/error-2&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error 2</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index4fef.html?page=snippets/pages/errors/error-3&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error 3</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="indexd268.html?page=snippets/pages/errors/error-4&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error 4</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index710c.html?page=snippets/pages/errors/error-5&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error 5</span></a></li><li class="m-menu__item " aria-haspopup="true" ><a target="_blank" href="index3860.html?page=snippets/pages/errors/error-6&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error 6</span></a></li></ul></div></li></ul></div></li>		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->							
<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
 		<div class="mr-auto">
 			<h3 class="m-subheader__title m-subheader__title--separator">Buttons Examples</h3>			
							<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
						   <i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
											<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text">DataTables</span>
							</a>
						</li>
											<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text">Extensions</span>
							</a>
						</li>
											<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text">Buttons</span>
							</a>
						</li>
									</ul>
			 		</div>
  		<div>
  							<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
					<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
						<i class="la la-plus m--hide"></i>
						<i class="la la-ellipsis-h"></i>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first m--hide">
											<span class="m-nav__section-text">Quick Actions</span>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-share"></i>
											<span class="m-nav__link-text">Activity</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-chat-1"></i>
											<span class="m-nav__link-text">Messages</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-info"></i>
											<span class="m-nav__link-text">FAQ</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-lifebuoy"></i>
											<span class="m-nav__link-text">Support</span>
											</a>
										</li>
										<li class="m-nav__separator m-nav__separator--fit">
										</li>
										<li class="m-nav__item">
											<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			  		</div>
	</div>
</div>
<!-- END: Subheader -->		      
  <div class="m-content">
		            <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
	<div class="m-alert__icon">
		<i class="flaticon-exclamation m--font-brand"></i>
	</div>
	<div class="m-alert__text">
		A common UI paradigm to use with interactive tables is to present buttons that will trigger some action.
		See official documentation <a href="https://datatables.net/extensions/buttons/" target="_blank">here</a>.
	</div>
</div>
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Export Tools
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Order</span>
						</span>
					</a>
				</li>
				<li class="m-portlet__nav-item"></li>
				<li class="m-portlet__nav-item">
			<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
	<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
		<i class="la la-ellipsis-h m--font-brand"></i>
	</a>
	<div class="m-dropdown__wrapper">
		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
		<div class="m-dropdown__inner">
			<div class="m-dropdown__body">
				<div class="m-dropdown__content">
					<ul class="m-nav">
						<li class="m-nav__section m-nav__section--first">
							<span class="m-nav__section-text">Quick Actions</span>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-share"></i>
							<span class="m-nav__link-text">Create Post</span>
							</a>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-chat-1"></i>
							<span class="m-nav__link-text">Send Messages</span>
							</a>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-multimedia-2"></i>
							<span class="m-nav__link-text">Upload File</span>
							</a>
						</li>
						<li class="m-nav__section">
							<span class="m-nav__section-text">Useful Links</span>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-info"></i>
							<span class="m-nav__link-text">FAQ</span>
							</a>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-lifebuoy"></i>
							<span class="m-nav__link-text">Support</span>
							</a>
						</li>
						<li class="m-nav__separator m-nav__separator--fit m--hide">
						</li>
						<li class="m-nav__item m--hide">
							<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
			  						<tr>
				  									<th>Order ID</th>
				  									<th>Country</th>
				  									<th>Ship City</th>
				  									<th>Ship Address</th>
				  									<th>Company Agent</th>
				  									<th>Company Name</th>
				  									<th>Status</th>
				  									<th>Type</th>
				  						</tr>
						</thead>
			
								<tbody>
									<tr>
				  									<td>61715-075</td>
				  									<td>China</td>
				  									<td>Tieba</td>
				  									<td>746 Pine View Junction</td>
				  									<td>Nixie Sailor</td>
				  									<td>Gleichner, Ziemann and Gutkowski</td>
				  									<td>3</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>63629-4697</td>
				  									<td>Indonesia</td>
				  									<td>Cihaur</td>
				  									<td>01652 Fulton Trail</td>
				  									<td>Emelita Giraldez</td>
				  									<td>Rosenbaum-Reichel</td>
				  									<td>6</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>68084-123</td>
				  									<td>Argentina</td>
				  									<td>Puerto Iguazú</td>
				  									<td>2 Pine View Park</td>
				  									<td>Ula Luckin</td>
				  									<td>Kulas, Cassin and Batz</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>67457-428</td>
				  									<td>Indonesia</td>
				  									<td>Talok</td>
				  									<td>3050 Buell Terrace</td>
				  									<td>Evangeline Cure</td>
				  									<td>Pfannerstill-Treutel</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>31722-529</td>
				  									<td>Austria</td>
				  									<td>Sankt Andrä-Höch</td>
				  									<td>3038 Trailsway Junction</td>
				  									<td>Tierney St. Louis</td>
				  									<td>Dicki-Kling</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>64117-168</td>
				  									<td>China</td>
				  									<td>Rongkou</td>
				  									<td>023 South Way</td>
				  									<td>Gerhard Reinhard</td>
				  									<td>Gleason, Kub and Marquardt</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>43857-0331</td>
				  									<td>China</td>
				  									<td>Baiguo</td>
				  									<td>56482 Fairfield Terrace</td>
				  									<td>Englebert Shelley</td>
				  									<td>Jenkins Inc</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>64980-196</td>
				  									<td>Croatia</td>
				  									<td>Vinica</td>
				  									<td>0 Elka Street</td>
				  									<td>Hazlett Kite</td>
				  									<td>Streich LLC</td>
				  									<td>6</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0404-0360</td>
				  									<td>Colombia</td>
				  									<td>San Carlos</td>
				  									<td>38099 Ilene Hill</td>
				  									<td>Freida Morby</td>
				  									<td>Haley, Schamberger and Durgan</td>
				  									<td>2</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>52125-267</td>
				  									<td>Thailand</td>
				  									<td>Maha Sarakham</td>
				  									<td>8696 Barby Pass</td>
				  									<td>Obed Helian</td>
				  									<td>Labadie, Predovic and Hammes</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>54092-515</td>
				  									<td>Brazil</td>
				  									<td>Canguaretama</td>
				  									<td>32461 Ridgeway Alley</td>
				  									<td>Sibyl Amy</td>
				  									<td>Treutel-Ratke</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>0185-0130</td>
				  									<td>China</td>
				  									<td>Jiamachi</td>
				  									<td>23 Walton Pass</td>
				  									<td>Norri Foldes</td>
				  									<td>Strosin, Nitzsche and Wisozk</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>21130-678</td>
				  									<td>China</td>
				  									<td>Qiaole</td>
				  									<td>328 Glendale Hill</td>
				  									<td>Myrna Orhtmann</td>
				  									<td>Miller-Schiller</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>40076-953</td>
				  									<td>Portugal</td>
				  									<td>Burgau</td>
				  									<td>52550 Crownhardt Court</td>
				  									<td>Sioux Kneath</td>
				  									<td>Rice, Cole and Spinka</td>
				  									<td>4</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>36987-3005</td>
				  									<td>Portugal</td>
				  									<td>Bacelo</td>
				  									<td>548 Morrow Terrace</td>
				  									<td>Christa Jacmar</td>
				  									<td>Brakus-Hansen</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>67510-0062</td>
				  									<td>South Africa</td>
				  									<td>Pongola</td>
				  									<td>02534 Hauk Trail</td>
				  									<td>Shandee Goracci</td>
				  									<td>Bergnaum, Thiel and Schuppe</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>36987-2542</td>
				  									<td>Russia</td>
				  									<td>Novokizhinginsk</td>
				  									<td>19427 Sloan Road</td>
				  									<td>Jerrome Colvie</td>
				  									<td>Kreiger, Glover and Connelly</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>11673-479</td>
				  									<td>Brazil</td>
				  									<td>Conceição das Alagoas</td>
				  									<td>191 Stone Corner Road</td>
				  									<td>Michaelina Plenderleith</td>
				  									<td>Legros-Gleichner</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>47781-264</td>
				  									<td>Ukraine</td>
				  									<td>Yasinya</td>
				  									<td>1481 Sauthoff Place</td>
				  									<td>Lombard Luthwood</td>
				  									<td>Haag LLC</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>42291-712</td>
				  									<td>Indonesia</td>
				  									<td>Kembang</td>
				  									<td>9029 Blackbird Point</td>
				  									<td>Leonora Chevin</td>
				  									<td>Mann LLC</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>64679-154</td>
				  									<td>Mongolia</td>
				  									<td>Sharga</td>
				  									<td>102 Holmberg Park</td>
				  									<td>Tannie Seakes</td>
				  									<td>Blanda Group</td>
				  									<td>6</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>49348-055</td>
				  									<td>China</td>
				  									<td>Guxi</td>
				  									<td>45 Butterfield Street</td>
				  									<td>Yardley Wetherell</td>
				  									<td>Gerlach-Schultz</td>
				  									<td>2</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>47593-438</td>
				  									<td>Portugal</td>
				  									<td>Viso</td>
				  									<td>97 Larry Center</td>
				  									<td>Bryn Peascod</td>
				  									<td>Larkin and Sons</td>
				  									<td>6</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>54569-0175</td>
				  									<td>Japan</td>
				  									<td>Minato</td>
				  									<td>077 Hoffman Center</td>
				  									<td>Chrissie Jeromson</td>
				  									<td>Brakus-McCullough</td>
				  									<td>2</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0093-1016</td>
				  									<td>Indonesia</td>
				  									<td>Merdeka</td>
				  									<td>3150 Cherokee Center</td>
				  									<td>Gusti Clamp</td>
				  									<td>Stokes Group</td>
				  									<td>6</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>0093-5142</td>
				  									<td>China</td>
				  									<td>Jianggao</td>
				  									<td>289 Badeau Alley</td>
				  									<td>Otis Jobbins</td>
				  									<td>Ruecker, Leffler and Abshire</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>51523-026</td>
				  									<td>Germany</td>
				  									<td>Erfurt</td>
				  									<td>132 Chive Way</td>
				  									<td>Lonnie Haycox</td>
				  									<td>Feest Group</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>49035-522</td>
				  									<td>Australia</td>
				  									<td>Eastern Suburbs Mc</td>
				  									<td>074 Algoma Drive</td>
				  									<td>Heddi Castelli</td>
				  									<td>Kessler and Sons</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>58411-198</td>
				  									<td>Ethiopia</td>
				  									<td>Kombolcha</td>
				  									<td>91066 Amoth Court</td>
				  									<td>Tuck O'Dowgaine</td>
				  									<td>Simonis, Rowe and Davis</td>
				  									<td>1</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>27495-006</td>
				  									<td>Portugal</td>
				  									<td>Arrifes</td>
				  									<td>3 Fairfield Junction</td>
				  									<td>Vernon Cosham</td>
				  									<td>Kreiger-Nicolas</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>55154-8284</td>
				  									<td>Philippines</td>
				  									<td>Talisay</td>
				  									<td>09 Sachtjen Junction</td>
				  									<td>Bryna MacCracken</td>
				  									<td>Hyatt-Witting</td>
				  									<td>2</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>62678-207</td>
				  									<td>Libya</td>
				  									<td>Zuwārah</td>
				  									<td>82 Thackeray Pass</td>
				  									<td>Freda Arnall</td>
				  									<td>Dicki, Morar and Stiedemann</td>
				  									<td>3</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>68428-725</td>
				  									<td>China</td>
				  									<td>Zhangcun</td>
				  									<td>3 Goodland Terrace</td>
				  									<td>Pavel Kringe</td>
				  									<td>Goldner-Lehner</td>
				  									<td>4</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0363-0724</td>
				  									<td>Morocco</td>
				  									<td>Temara</td>
				  									<td>9550 Weeping Birch Crossing</td>
				  									<td>Felix Nazaret</td>
				  									<td>Waters, Quigley and Keeling</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>37000-102</td>
				  									<td>Paraguay</td>
				  									<td>Los Cedrales</td>
				  									<td>1 Ridge Oak Way</td>
				  									<td>Penrod Allanby</td>
				  									<td>Rodriguez Group</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>55289-002</td>
				  									<td>Philippines</td>
				  									<td>Dologon</td>
				  									<td>9 Vidon Terrace</td>
				  									<td>Hubey Passby</td>
				  									<td>Lemke-Hermiston</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>15127-874</td>
				  									<td>Tanzania</td>
				  									<td>Nanganga</td>
				  									<td>33 Anniversary Parkway</td>
				  									<td>Magdaia Rotlauf</td>
				  									<td>Hettinger, Medhurst and Heaney</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>49349-123</td>
				  									<td>Indonesia</td>
				  									<td>Pule</td>
				  									<td>77292 Bonner Plaza</td>
				  									<td>Alfonse Lawrance</td>
				  									<td>Schuppe-Harber</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>17089-415</td>
				  									<td>Palestinian Territory</td>
				  									<td>Za‘tarah</td>
				  									<td>42806 Ridgeview Terrace</td>
				  									<td>Kessiah Chettoe</td>
				  									<td>Mraz LLC</td>
				  									<td>5</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>51327-510</td>
				  									<td>Philippines</td>
				  									<td>Esperanza</td>
				  									<td>4 Linden Court</td>
				  									<td>Natka Fairbanks</td>
				  									<td>Mueller-Greenholt</td>
				  									<td>3</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>0187-2201</td>
				  									<td>Brazil</td>
				  									<td>Rio das Ostras</td>
				  									<td>5722 Buhler Place</td>
				  									<td>Shaw Puvia</td>
				  									<td>Veum LLC</td>
				  									<td>3</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>16590-890</td>
				  									<td>Indonesia</td>
				  									<td>Krajan Gajahmati</td>
				  									<td>54 Corry Street</td>
				  									<td>Alden Dingate</td>
				  									<td>Heidenreich Inc</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>75862-001</td>
				  									<td>Indonesia</td>
				  									<td>Pineleng</td>
				  									<td>4 Messerschmidt Point</td>
				  									<td>Cherish Peplay</td>
				  									<td>McCullough-Gibson</td>
				  									<td>2</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>24559-091</td>
				  									<td>Philippines</td>
				  									<td>Amuñgan</td>
				  									<td>5470 Forest Parkway</td>
				  									<td>Nedi Swetman</td>
				  									<td>Gerhold Inc</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0007-3230</td>
				  									<td>Russia</td>
				  									<td>Bilyarsk</td>
				  									<td>5899 Basil Place</td>
				  									<td>Ashley Blick</td>
				  									<td>Cummings-Goodwin</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>50184-1029</td>
				  									<td>Peru</td>
				  									<td>Chocope</td>
				  									<td>65560 Daystar Center</td>
				  									<td>Saunders Harmant</td>
				  									<td>O'Kon-Wiegand</td>
				  									<td>3</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>10819-6003</td>
				  									<td>France</td>
				  									<td>Rivesaltes</td>
				  									<td>4981 Springs Center</td>
				  									<td>Mellisa Laurencot</td>
				  									<td>Jacobs Group</td>
				  									<td>1</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>62750-003</td>
				  									<td>Mongolia</td>
				  									<td>Jargalant</td>
				  									<td>94 Rutledge Way</td>
				  									<td>Orland Myderscough</td>
				  									<td>Gutkowski Inc</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>68647-122</td>
				  									<td>Philippines</td>
				  									<td>Cardona</td>
				  									<td>4765 Service Hill</td>
				  									<td>Devi Iglesias</td>
				  									<td>Ullrich-Dibbert</td>
				  									<td>1</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>36987-3093</td>
				  									<td>China</td>
				  									<td>Jiantou</td>
				  									<td>373 Northwestern Plaza</td>
				  									<td>Bliss Tummasutti</td>
				  									<td>Legros-Cummings</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
								</tbody>
			
								<tfoot>
					<tr>
												<th>Order ID</th>
												<th>Country</th>
												<th>Ship City</th>
												<th>Ship Address</th>
												<th>Company Agent</th>
												<th>Company Name</th>
												<th>Status</th>
												<th>Type</th>
									</tr>
					</tfoot>
					</table>
	</div>
</div>
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Dropdown Export Tools
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="#" class="btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Order</span>
						</span>
					</a>
				</li>
				<li class="m-portlet__nav-item"></li>
				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
					<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
						Actions
					</a>
					<div class="m-dropdown__wrapper" style="z-index: 101;">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36px;"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first">
											<span class="m-nav__section-text">Export Tools</span>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link" id="export_print">
												<i class="m-nav__link-icon la la-print"></i>
												<span class="m-nav__link-text">Print</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link" id="export_copy">
												<i class="m-nav__link-icon la la-copy"></i>
												<span class="m-nav__link-text">Copy</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link" id="export_excel">
												<i class="m-nav__link-icon la la-file-excel-o"></i>
												<span class="m-nav__link-text">Excel</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link" id="export_csv">
												<i class="m-nav__link-icon la la-file-text-o"></i>
												<span class="m-nav__link-text">CSV</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="#" class="m-nav__link" id="export_pdf">
												<i class="m-nav__link-icon la la-file-pdf-o"></i>
												<span class="m-nav__link-text">PDF</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2">
								<thead>
			  						<tr>
				  									<th>Order ID</th>
				  									<th>Country</th>
				  									<th>Ship City</th>
				  									<th>Ship Address</th>
				  									<th>Company Agent</th>
				  									<th>Company Name</th>
				  									<th>Status</th>
				  									<th>Type</th>
				  						</tr>
						</thead>
			
								<tbody>
									<tr>
				  									<td>61715-075</td>
				  									<td>China</td>
				  									<td>Tieba</td>
				  									<td>746 Pine View Junction</td>
				  									<td>Nixie Sailor</td>
				  									<td>Gleichner, Ziemann and Gutkowski</td>
				  									<td>3</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>63629-4697</td>
				  									<td>Indonesia</td>
				  									<td>Cihaur</td>
				  									<td>01652 Fulton Trail</td>
				  									<td>Emelita Giraldez</td>
				  									<td>Rosenbaum-Reichel</td>
				  									<td>6</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>68084-123</td>
				  									<td>Argentina</td>
				  									<td>Puerto Iguazú</td>
				  									<td>2 Pine View Park</td>
				  									<td>Ula Luckin</td>
				  									<td>Kulas, Cassin and Batz</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>67457-428</td>
				  									<td>Indonesia</td>
				  									<td>Talok</td>
				  									<td>3050 Buell Terrace</td>
				  									<td>Evangeline Cure</td>
				  									<td>Pfannerstill-Treutel</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>31722-529</td>
				  									<td>Austria</td>
				  									<td>Sankt Andrä-Höch</td>
				  									<td>3038 Trailsway Junction</td>
				  									<td>Tierney St. Louis</td>
				  									<td>Dicki-Kling</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>64117-168</td>
				  									<td>China</td>
				  									<td>Rongkou</td>
				  									<td>023 South Way</td>
				  									<td>Gerhard Reinhard</td>
				  									<td>Gleason, Kub and Marquardt</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>43857-0331</td>
				  									<td>China</td>
				  									<td>Baiguo</td>
				  									<td>56482 Fairfield Terrace</td>
				  									<td>Englebert Shelley</td>
				  									<td>Jenkins Inc</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>64980-196</td>
				  									<td>Croatia</td>
				  									<td>Vinica</td>
				  									<td>0 Elka Street</td>
				  									<td>Hazlett Kite</td>
				  									<td>Streich LLC</td>
				  									<td>6</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0404-0360</td>
				  									<td>Colombia</td>
				  									<td>San Carlos</td>
				  									<td>38099 Ilene Hill</td>
				  									<td>Freida Morby</td>
				  									<td>Haley, Schamberger and Durgan</td>
				  									<td>2</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>52125-267</td>
				  									<td>Thailand</td>
				  									<td>Maha Sarakham</td>
				  									<td>8696 Barby Pass</td>
				  									<td>Obed Helian</td>
				  									<td>Labadie, Predovic and Hammes</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>54092-515</td>
				  									<td>Brazil</td>
				  									<td>Canguaretama</td>
				  									<td>32461 Ridgeway Alley</td>
				  									<td>Sibyl Amy</td>
				  									<td>Treutel-Ratke</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>0185-0130</td>
				  									<td>China</td>
				  									<td>Jiamachi</td>
				  									<td>23 Walton Pass</td>
				  									<td>Norri Foldes</td>
				  									<td>Strosin, Nitzsche and Wisozk</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>21130-678</td>
				  									<td>China</td>
				  									<td>Qiaole</td>
				  									<td>328 Glendale Hill</td>
				  									<td>Myrna Orhtmann</td>
				  									<td>Miller-Schiller</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>40076-953</td>
				  									<td>Portugal</td>
				  									<td>Burgau</td>
				  									<td>52550 Crownhardt Court</td>
				  									<td>Sioux Kneath</td>
				  									<td>Rice, Cole and Spinka</td>
				  									<td>4</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>36987-3005</td>
				  									<td>Portugal</td>
				  									<td>Bacelo</td>
				  									<td>548 Morrow Terrace</td>
				  									<td>Christa Jacmar</td>
				  									<td>Brakus-Hansen</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>67510-0062</td>
				  									<td>South Africa</td>
				  									<td>Pongola</td>
				  									<td>02534 Hauk Trail</td>
				  									<td>Shandee Goracci</td>
				  									<td>Bergnaum, Thiel and Schuppe</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>36987-2542</td>
				  									<td>Russia</td>
				  									<td>Novokizhinginsk</td>
				  									<td>19427 Sloan Road</td>
				  									<td>Jerrome Colvie</td>
				  									<td>Kreiger, Glover and Connelly</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>11673-479</td>
				  									<td>Brazil</td>
				  									<td>Conceição das Alagoas</td>
				  									<td>191 Stone Corner Road</td>
				  									<td>Michaelina Plenderleith</td>
				  									<td>Legros-Gleichner</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>47781-264</td>
				  									<td>Ukraine</td>
				  									<td>Yasinya</td>
				  									<td>1481 Sauthoff Place</td>
				  									<td>Lombard Luthwood</td>
				  									<td>Haag LLC</td>
				  									<td>1</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>42291-712</td>
				  									<td>Indonesia</td>
				  									<td>Kembang</td>
				  									<td>9029 Blackbird Point</td>
				  									<td>Leonora Chevin</td>
				  									<td>Mann LLC</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>64679-154</td>
				  									<td>Mongolia</td>
				  									<td>Sharga</td>
				  									<td>102 Holmberg Park</td>
				  									<td>Tannie Seakes</td>
				  									<td>Blanda Group</td>
				  									<td>6</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>49348-055</td>
				  									<td>China</td>
				  									<td>Guxi</td>
				  									<td>45 Butterfield Street</td>
				  									<td>Yardley Wetherell</td>
				  									<td>Gerlach-Schultz</td>
				  									<td>2</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>47593-438</td>
				  									<td>Portugal</td>
				  									<td>Viso</td>
				  									<td>97 Larry Center</td>
				  									<td>Bryn Peascod</td>
				  									<td>Larkin and Sons</td>
				  									<td>6</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>54569-0175</td>
				  									<td>Japan</td>
				  									<td>Minato</td>
				  									<td>077 Hoffman Center</td>
				  									<td>Chrissie Jeromson</td>
				  									<td>Brakus-McCullough</td>
				  									<td>2</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0093-1016</td>
				  									<td>Indonesia</td>
				  									<td>Merdeka</td>
				  									<td>3150 Cherokee Center</td>
				  									<td>Gusti Clamp</td>
				  									<td>Stokes Group</td>
				  									<td>6</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>0093-5142</td>
				  									<td>China</td>
				  									<td>Jianggao</td>
				  									<td>289 Badeau Alley</td>
				  									<td>Otis Jobbins</td>
				  									<td>Ruecker, Leffler and Abshire</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>51523-026</td>
				  									<td>Germany</td>
				  									<td>Erfurt</td>
				  									<td>132 Chive Way</td>
				  									<td>Lonnie Haycox</td>
				  									<td>Feest Group</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>49035-522</td>
				  									<td>Australia</td>
				  									<td>Eastern Suburbs Mc</td>
				  									<td>074 Algoma Drive</td>
				  									<td>Heddi Castelli</td>
				  									<td>Kessler and Sons</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>58411-198</td>
				  									<td>Ethiopia</td>
				  									<td>Kombolcha</td>
				  									<td>91066 Amoth Court</td>
				  									<td>Tuck O'Dowgaine</td>
				  									<td>Simonis, Rowe and Davis</td>
				  									<td>1</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>27495-006</td>
				  									<td>Portugal</td>
				  									<td>Arrifes</td>
				  									<td>3 Fairfield Junction</td>
				  									<td>Vernon Cosham</td>
				  									<td>Kreiger-Nicolas</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>55154-8284</td>
				  									<td>Philippines</td>
				  									<td>Talisay</td>
				  									<td>09 Sachtjen Junction</td>
				  									<td>Bryna MacCracken</td>
				  									<td>Hyatt-Witting</td>
				  									<td>2</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>62678-207</td>
				  									<td>Libya</td>
				  									<td>Zuwārah</td>
				  									<td>82 Thackeray Pass</td>
				  									<td>Freda Arnall</td>
				  									<td>Dicki, Morar and Stiedemann</td>
				  									<td>3</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>68428-725</td>
				  									<td>China</td>
				  									<td>Zhangcun</td>
				  									<td>3 Goodland Terrace</td>
				  									<td>Pavel Kringe</td>
				  									<td>Goldner-Lehner</td>
				  									<td>4</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0363-0724</td>
				  									<td>Morocco</td>
				  									<td>Temara</td>
				  									<td>9550 Weeping Birch Crossing</td>
				  									<td>Felix Nazaret</td>
				  									<td>Waters, Quigley and Keeling</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>37000-102</td>
				  									<td>Paraguay</td>
				  									<td>Los Cedrales</td>
				  									<td>1 Ridge Oak Way</td>
				  									<td>Penrod Allanby</td>
				  									<td>Rodriguez Group</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>55289-002</td>
				  									<td>Philippines</td>
				  									<td>Dologon</td>
				  									<td>9 Vidon Terrace</td>
				  									<td>Hubey Passby</td>
				  									<td>Lemke-Hermiston</td>
				  									<td>2</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>15127-874</td>
				  									<td>Tanzania</td>
				  									<td>Nanganga</td>
				  									<td>33 Anniversary Parkway</td>
				  									<td>Magdaia Rotlauf</td>
				  									<td>Hettinger, Medhurst and Heaney</td>
				  									<td>3</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>49349-123</td>
				  									<td>Indonesia</td>
				  									<td>Pule</td>
				  									<td>77292 Bonner Plaza</td>
				  									<td>Alfonse Lawrance</td>
				  									<td>Schuppe-Harber</td>
				  									<td>1</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>17089-415</td>
				  									<td>Palestinian Territory</td>
				  									<td>Za‘tarah</td>
				  									<td>42806 Ridgeview Terrace</td>
				  									<td>Kessiah Chettoe</td>
				  									<td>Mraz LLC</td>
				  									<td>5</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>51327-510</td>
				  									<td>Philippines</td>
				  									<td>Esperanza</td>
				  									<td>4 Linden Court</td>
				  									<td>Natka Fairbanks</td>
				  									<td>Mueller-Greenholt</td>
				  									<td>3</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>0187-2201</td>
				  									<td>Brazil</td>
				  									<td>Rio das Ostras</td>
				  									<td>5722 Buhler Place</td>
				  									<td>Shaw Puvia</td>
				  									<td>Veum LLC</td>
				  									<td>3</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>16590-890</td>
				  									<td>Indonesia</td>
				  									<td>Krajan Gajahmati</td>
				  									<td>54 Corry Street</td>
				  									<td>Alden Dingate</td>
				  									<td>Heidenreich Inc</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>75862-001</td>
				  									<td>Indonesia</td>
				  									<td>Pineleng</td>
				  									<td>4 Messerschmidt Point</td>
				  									<td>Cherish Peplay</td>
				  									<td>McCullough-Gibson</td>
				  									<td>2</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>24559-091</td>
				  									<td>Philippines</td>
				  									<td>Amuñgan</td>
				  									<td>5470 Forest Parkway</td>
				  									<td>Nedi Swetman</td>
				  									<td>Gerhold Inc</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>0007-3230</td>
				  									<td>Russia</td>
				  									<td>Bilyarsk</td>
				  									<td>5899 Basil Place</td>
				  									<td>Ashley Blick</td>
				  									<td>Cummings-Goodwin</td>
				  									<td>4</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>50184-1029</td>
				  									<td>Peru</td>
				  									<td>Chocope</td>
				  									<td>65560 Daystar Center</td>
				  									<td>Saunders Harmant</td>
				  									<td>O'Kon-Wiegand</td>
				  									<td>3</td>
				  									<td>2</td>
				  						</tr>
									<tr>
				  									<td>10819-6003</td>
				  									<td>France</td>
				  									<td>Rivesaltes</td>
				  									<td>4981 Springs Center</td>
				  									<td>Mellisa Laurencot</td>
				  									<td>Jacobs Group</td>
				  									<td>1</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>62750-003</td>
				  									<td>Mongolia</td>
				  									<td>Jargalant</td>
				  									<td>94 Rutledge Way</td>
				  									<td>Orland Myderscough</td>
				  									<td>Gutkowski Inc</td>
				  									<td>5</td>
				  									<td>3</td>
				  						</tr>
									<tr>
				  									<td>68647-122</td>
				  									<td>Philippines</td>
				  									<td>Cardona</td>
				  									<td>4765 Service Hill</td>
				  									<td>Devi Iglesias</td>
				  									<td>Ullrich-Dibbert</td>
				  									<td>1</td>
				  									<td>1</td>
				  						</tr>
									<tr>
				  									<td>36987-3093</td>
				  									<td>China</td>
				  									<td>Jiantou</td>
				  									<td>373 Northwestern Plaza</td>
				  									<td>Bliss Tummasutti</td>
				  									<td>Legros-Cummings</td>
				  									<td>5</td>
				  									<td>1</td>
				  						</tr>
								</tbody>
			
								<tfoot>
					<tr>
												<th>Order ID</th>
												<th>Country</th>
												<th>Ship City</th>
												<th>Ship Address</th>
												<th>Company Agent</th>
												<th>Company Name</th>
												<th>Status</th>
												<th>Type</th>
									</tr>
					</tfoot>
					</table>
	</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->		     
              </div>
			 </div>	
		</div>
				<!-- end:: Body -->
@endsection