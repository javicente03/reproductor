<?php
/* Smarty version 3.1.40, created on 2022-05-06 23:19:26
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6275acfe7ba454_95863271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca6f7e18269ae1274a6a4f781ad174f07b164fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\index.tpl',
      1 => 1651879158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_playlist.tpl' => 1,
    'file:_footer_radio.tpl' => 1,
  ),
),false)) {
function content_6275acfe7ba454_95863271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="center">
    <div class="left">
      <div class="controls">
        <div class="close"></div>
        <div class="minimize"></div>
        <div class="maximize"></div>
      </div>
      <div class="menu">
        <div class="title">MENU</div>
          <div class="item"><i class="material-icons">layers</i><span>About</span></div>
          <div class="item"><i class="material-icons">radio</i><span>Playlist</span></div>
          <div class="item"><i class="material-icons">mic</i><span>Our team</span></div>
          <div class="item"><i class="material-icons">album</i><span>Contacts</span></div>
          <div class="item"><i class="material-icons">shop</i><span>Shop</span></div>
      </div>
      <div class="playlists">
        <div class="title">OTHERS</div>
          <div class="item"><i class="material-icons">radio</i><span>Radio</span></div>
          <div class="item"><i class="material-icons">list</i><span>Reggaeton</span></div>
          <div class="item"><i class="material-icons">chat</i><span>Chat</span></div>
      </div>
    </div>
    <div class="right">
      <div class="search"><i class="material-icons">search</i>
        <input placeholder="Find and listen to your favorate music..."/>
      </div>
      <div class="account"><i class="material-icons">notifications_none</i><img class="avatar" src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/350523/profile/profile-80.jpg?1"/></div>
      <div class="row">
        <h1>Featured Albums</h1>
        <button class="play"><span>PLAY</span><i class="material-icons">play_arrow</i></button>
      </div>
      <div class="albums">
        <div class="music-player-container is-playing">
          <div class="music-player">
            <div class="player-content-container">
              <h1 class="artist-name">Incubus</h1>
              <h2 class="album-title">Make Yourself</h2>
              <h3 class="song-title">"Stellar"</h3>
              <div class="music-player-controls">
                <div class="control-back"></div>
                <div class="control-play"></div>
                <div class="control-forwards"></div>
              </div>
            </div>
          </div>
          <div class="album">
            <div class="album-art"></div>
            <div class="vinyl"></div>
          </div>
        </div>
      </div>
      <div class="split">
        <div class="daily-mix"> 
          <h1>Daily Mix</h1>

          <?php $_smarty_tpl->_subTemplateRender('file:_playlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
        </div>

        <div id="mp3_player">
          <canvas id="analyzer_render"></canvas>
          <div id="audio_box"></div>
        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>
  window.onload = function() {
      document.querySelector('div.center').style.display = "flex"
      document.querySelector('.loading').style.display = "none" 
  }
<?php echo '</script'; ?>
><?php }
}