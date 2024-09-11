@extends('layouts.app')
@section('content')
    <div style="cursor: auto;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);background-color:rgb(249, 249, 249);font-family:Ubuntu, sans-serif;transition:0.25s ease-in-out;position:relative;left:0px;margin:0px;"
        cz-shortcut-listen="true">
        <div
            style="width: 100%;height:500px;background:rgb(44, 46, 49) none repeat scroll 0% 0% / auto padding-box border-box;color:rgb(255, 255, 255);text-align:center;overflow:hidden;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);display:block;">

        </div>
        <div
            style="margin-left: auto; margin-right: auto; margin-top:-200px;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);max-width:730px;overflow:hidden;">
            <div
                style="position:relative;padding:20px 0px;width: 100%;background:rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;border-radius:3px;box-shadow:rgba(0, 0, 0, 0.5) 0px 0px 1px 0px;overflow:hidden;text-align:center;z-index:5;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                <div style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    <div
                        style="position:relative;background:rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;padding:5px;width: 150px;height:150px;border-radius:50%;margin-bottom:30px;border:0.666667px solid rgba(0, 0, 0, 0.25);-webkit-tap-highlight-color:rgba(0, 0, 0, 0);left:365px;transform:matrix(1, 0, 0, 1, -80.6667, 0);">
                        <a href="javascript:getNewUser();"
                            style="color:rgb(255, 255, 255);position:absolute;bottom:-30px;left:80px;padding:10px 15px;background:rgba(0, 0, 0, 0.75) none repeat scroll 0% 0% / auto padding-box border-box;border-radius:3px;text-decoration:none solid rgb(255, 255, 255);opacity:0;display:block;transform:matrix(1, 0, 0, 1, -31.5156, 0);transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">New</a><img
                            src="https://randomuser.me/api/portraits/men/56.jpg"
                            style="width: 150px;border-radius:50%;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);border:0px none rgb(0, 0, 0);" />
                    </div>
                    <p
                        style="color:rgb(153, 153, 153);font-size:18px;margin:0px;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                        Hi, My name is</p>
                    <p
                        style="color:rgb(44, 46, 49);font-size:38px;margin:5px;text-transform:capitalize;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                        Ritthy Powell</p>
                </div>
                <ul
                    style="list-style-type:none;margin:0px;padding:0px;overflow:hidden;float:left;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);position:relative;left:365px;transform:matrix(1, 0, 0, 1, -240, 0);">
                    <li data-title="Hi, My name is" data-value="Ritthy Powell" data-label="name"
                        style="background-position:0px -96px;cursor:pointer;display:block;width: 40px;height:48px;float:left;margin:20px;background-image:url('https://randomuser.me/img/card_icons.png');background-size:378px;background-position-y:-96px;transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    </li>
                    <li data-title="My email address is" data-value="ritthy.powell@example.com" data-label="email"
                        data-caps="false"
                        style="background-position:-68px -48px;cursor:pointer;display:block;width: 40px;height:48px;float:left;margin:20px;background-image:url('https://randomuser.me/img/card_icons.png');background-size:378px;background-position-y:-48px;transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    </li>
                    <li data-title="My birthday is" data-value="7/7/1950" data-label="birthday"
                        style="background-position:-135px -48px;cursor:pointer;display:block;width: 40px;height:48px;float:left;margin:20px;background-image:url('https://randomuser.me/img/card_icons.png');background-size:378px;background-position-y:-48px;transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    </li>
                    <li data-title="My address is" data-value="594 James St" data-label="location"
                        style="background-position:-203px -48px;cursor:pointer;display:block;width: 40px;height:48px;float:left;margin:20px;background-image:url('https://randomuser.me/img/card_icons.png');background-size:378px;background-position-y:-48px;transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    </li>
                    <li data-title="My phone number is" data-value="(393) 265-9655" data-label="phone"
                        style="background-position:-270px -48px;cursor:pointer;display:block;width: 40px;height:48px;float:left;margin:20px;background-image:url('https://randomuser.me/img/card_icons.png');background-size:378px;background-position-y:-48px;transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    </li>
                    <li data-title="My password is" data-value="henry" data-label="pass" data-caps="false"
                        style="background-position:-338px -48px;cursor:pointer;display:block;width: 40px;height:48px;float:left;margin:20px;background-image:url('https://randomuser.me/img/card_icons.png');background-size:378px;background-position-y:-48px;transition:0.25s ease-out;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
                    </li>
                </ul>
            </div>

        </div>
        <div ext-id="liecbddmkiiihnedobmlmillhodjkdmb" style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0);">
            <section style="margin-top:60px;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);display:block;"></section>
        </div>
    </div>
