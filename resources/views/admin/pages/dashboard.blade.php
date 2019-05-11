@extends('admin.admin_master')
@section('content')


<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <!--BEGIN METRO STATES-->
    <div class="metro-nav">
        <div class="metro-nav-block nav-block-orange">
            <a data-original-title="" href="#">
                <i class="icon-user"></i>
                <div class="info">321</div>
                <div class="status">Total Admin</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-yellow">
            <a data-original-title="" href="#">
                <i class="icon-user"></i>
                <div class="info">+970</div>
                <div class="status">Total Editor</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-grey">
            <a data-original-title="" href="#">
                <i class="icon-user"></i>
                <div class="info">49</div>
                <div class="status">Total Writer</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-blue double">
            <a data-original-title="" href="#">
                <i class="icon-eye-open"></i>
                <div class="info">+897</div>
                <div class="status">Unique Visitor</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-red">
            <a data-original-title="" href="#">
                <i class="icon-bar-chart"></i>
                <div class="info">+288</div>
                <div class="status">Total Post</div>
            </a>
        </div>
    </div>
    <div class="metro-nav">
        <div class="metro-nav-block nav-block-blue">
            <a data-original-title="" href="#">
                <i class="icon-comments-alt"></i>
                <div class="info">29</div>
                <div class="status">All Comments</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-green double">
            <a data-original-title="" href="#">
                <i class="icon-tasks"></i>
                <div class="info">$37624</div>
                <div class="status">Stock</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-orange">
            <a data-original-title="" href="#">
                <i class="icon-envelope"></i>
                <div class="info">123</div>
                <div class="status">Messages</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-purple">
            <a data-original-title="" href="#">
                <i class="icon-remove-sign"></i>
                <div class="info">34</div>
                <div class="status">Cancelled</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-grey ">
            <a data-original-title="" href="#">
                <i class="icon-external-link"></i>
                <div class="info">$53412</div>
                <div class="status">Total Profit</div>
            </a>
        </div>
    </div>
    <div class="space10"></div>
    <!--END METRO STATES-->
</div>

<!-- All notifications and comments  -->
<div class="row-fluid">
  <div class="span6">
     <!-- BEGIN NOTIFICATIONS PORTLET-->
     <div class="widget blue">
         <div class="widget-title">
             <h4><i class="icon-bell"></i> Notification </h4>
           <span class="tools">
               <a href="javascript:;" class="icon-chevron-down"></a>
               <a href="javascript:;" class="icon-remove"></a>
           </span>
         </div>
         <div class="widget-body">
             <ul class="item-list scroller padding"  style="overflow: hidden; width: auto; height: 320px;" data-always-visible="1">
                 <li>
                     <span class="label label-success"><i class="icon-bell"></i></span>
                     <span>New user registered.</span>
                     <div class="pull-right">
                         <span class="small italic ">Just now</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-success"><i class="icon-bell"></i></span>
                     <span>New order received.</span>
                     <div class="pull-right">
                         <span class="small italic ">15 mins ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                     <span>Alerting a user account balance.</span>
                     <div class="pull-right">
                         <span class="small italic ">3 hours ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-important"><i class=" icon-bug"></i></span>
                     <span>Alerting administrators staff.</span>
                     <div class="pull-right">
                         <span class="small italic ">9 mins ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-important"><i class=" icon-bug"></i></span>
                     <span>Messages are not sent to users.</span>
                     <div class="pull-right">
                         <span class="small italic ">10 hours ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                     <span>Web server #12 failed to relosd.</span>
                     <div class="pull-right">
                         <span class="small italic ">3 mins ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-success"><i class="icon-bell"></i></span>
                     <span>New order received.</span>
                     <div class="pull-right">
                         <span class="small italic ">40 mins ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                     <span>Alerting a user account balance.</span>
                     <div class="pull-right">
                         <span class="small italic ">1 hours ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-important"><i class=" icon-bug"></i></span>
                     <span>Alerting administrators staff.</span>
                     <div class="pull-right">
                         <span class="small italic ">1 mins ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-important"><i class=" icon-bug"></i></span>
                     <span>Messages are not sent to users.</span>
                     <div class="pull-right">
                         <span class="small italic ">11 hours ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                     <span>Web server #12 failed to relosd.</span>
                     <div class="pull-right">
                         <span class="small italic ">1 day ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-success"><i class="icon-bell"></i></span>
                     <span>New order received.</span>
                     <div class="pull-right">
                         <span class="small italic ">10 mins ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                     <span>Alerting a user account balance.</span>
                     <div class="pull-right">
                         <span class="small italic ">3 hours ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-important"><i class=" icon-bug"></i></span>
                     <span>Alerting administrators support staff.</span>
                     <div class="pull-right">
                         <span class="small italic ">6 hours ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-important"><i class=" icon-bug"></i></span>
                     <span>Messages are not sent to users.</span>
                     <div class="pull-right">
                         <span class="small italic ">3 days ago</span>

                     </div>
                 </li>
                 <li>
                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                     <span>Web server #12 failed to relosd.</span>
                     <div class="pull-right">
                         <span class="small italic ">1 day ago</span>

                     </div>
                 </li>
             </ul>
             <div class="space10"></div>
             <a href="#" class="pull-right">View all notifications</a>
             <div class="clearfix no-top-space no-bottom-space"></div>
         </div>
     </div>
     <!-- END NOTIFICATIONS PORTLET-->
 </div>
  <div class="span6">
     <!-- BEGIN CHAT PORTLET-->
     <div class="widget red">
         <div class="widget-title">
             <h4><i class="icon-comments-alt"></i> Comments</h4>
	<span class="tools">
	<a href="javascript:;" class="icon-chevron-down"></a>
	<a href="javascript:;" class="icon-remove"></a>
	</span>
         </div>
         <div class="widget-body">
             <div class="timeline-messages">
                 <!-- Comment -->
                 <div class="msg-time-chat">
                     <a class="message-img" href="#"><img alt="" src="{{asset('public/assets/admin/img/avatar1.jpg')}}" class="avatar"></a>
                     <div class="message-body msg-in">
                         <span class="arrow"></span>
                         <div class="text">
                             <p class="attribution"><a href="#">Doe</a> at 1:55pm, 13th April 2013</p>
                             <p>Hello, How are you brother?</p>
                         </div>
                     </div>
                 </div>
                 <!-- /comment -->

                 <!-- Comment -->
                 <div class="msg-time-chat">
                     <a class="message-img" href="#"><img alt="" src="{{asset('public/assets/admin/img/avatar2.jpg')}}" class="avatar"></a>
                     <div class="message-body msg-out">
                         <span class="arrow"></span>
                         <div class="text">
                             <p class="attribution"> <a href="#">Jonathan Smith</a> at 2:01pm, 13th April 2013</p>
                             <p>I'm Fine, Thank you. What about you? How is going on?</p>
                         </div>
                     </div>
                 </div>
                 <!-- /comment -->

                 <!-- Comment -->
                 <div class="msg-time-chat">
                     <a class="message-img" href="#"><img alt="" src="{{asset('public/assets/admin/img/avatar1.jpg')}}" class="avatar"></a>
                     <div class="message-body msg-in">
                         <span class="arrow"></span>
                         <div class="text">
                             <p class="attribution"><a href="#">Jhon Doe</a> at 2:03pm, 13th April 2013</p>
                             <p>Yeah I'm fine too. Everything is going fine here.</p>
                         </div>
                     </div>
                 </div>
                 <!-- /comment -->

                 <!-- Comment -->
                 <div class="msg-time-chat">
                     <a class="message-img" href="#"><img alt="" src="{{asset('public/assets/admin/img/avatar2.jpg')}}" class="avatar"></a>
                     <div class="message-body msg-out">
                         <span class="arrow"></span>
                         <div class="text">
                             <p class="attribution"><a href="#">Jonathan Smith</a> at 2:05pm, 13th April 2013</p>
                             <p>well good to know that. anyway how much time you need to done your task?</p>
                         </div>
                     </div>
                 </div>
                 <!-- /comment -->
             </div>
             <div class="chat-form">
                 <div class="input-cont">
                     <input type="text" placeholder="Type a message here..." />
                 </div>
                 <div class="btn-cont">
                     <a href="javascript:;" class="btn btn-primary">Send</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- END CHAT PORTLET-->
 </div>
</div>
@endsection
