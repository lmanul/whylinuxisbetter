<?php require("entete.php"); ?> <?php require("base.php"); ?>

<!--
<div id="birthday">
<div id="birthday-cake">
<img src="Images/birthday-cake.gif" width=100 />
</div>
<p><b>WhyLinuxIsBetter.net is two years old!</b></p>
<p>This is a good time to inaugurate a <i>brand new look</i>!<br />Since
January 2006, this website has seen 453&nbsp;409 visits
(1&nbsp;764&nbsp;761 page views).</p>
<p><b>Thank you!</b></p>
</div>
-->

<div id="corps">

<div id="news">
<!--<div id="news-img"><img src="Images/news.png" /></div>-->
<!--<p>New articles: <a href="items/drivers/index.php">Forget about drivers</a>, <a href="items/backdoors/index.php">No back doors in your 
software</a>.</p>-->
</div>

<h3>បកប្រែ​ដោយ​ ៖ ខឹម សុខែម  ម៉ន ម៉េត សេង សុត្ថា<br/><a href="http://www.khmeros.info">KhmerOS project</a></h3>

<br class="clearboth" />

<div id="items">
<p>
<?php item ("viruses", "មិន​ខ្វល់​អំពី​មេរោគ", "_km"); ?>
<?php item (stability, "តើ​ប្រព័ន្ធ​របស់​អ្នក​មិន​ស្ថិតស្ថេរ​​ឬ ?", "_km"); ?>
<?php item (security, "លីនុច​ការពារ​កុំព្យូទ័រ​របស់​អ្នក", "_km"); ?>
<?php item (dollars, "មិន​ចាំបាច់​ចំណាយ​ ៣០០ ដុល្លារ សម្រាប់​ប្រព័ន្ធ​ប្រតិបត្តិការ​របស់​អ្នក​ទេ", "_km"); ?>
<?php item ("crapware", "No more c**pware.", ""); ?>
<?php item (freedom, "សេរីភាព !", "_km"); ?>
<?php item (all_in_one, "នៅ​ពេល​បាន​ដំឡើង​ប្រព័ន្ធ​ ហេតុ​អ្វី​បាន​ជា​អ្នក <i>នៅ​តែ</i> ត្រូវ​ដំឡើង​កម្មវិធី​ផ្សេងៗ​ទៀត ?", "_km"); ?>
<?php item (drivers, "មិន​ខ្វល់​អំពី​​កម្មវិធី​បញ្ជា", "_km"); ?>
<?php item (global_update, "ធ្វើ​ឲ្យ​កម្មវិធី​របស់​អ្នក​ទាំងអស់​ទាន់សម័យ​ ដោយ​គ្រាន់​តែ​ចុច​ម្ដង​ប៉ុណ្ណោះ", "_km"); ?>
<?php item (warez, "ហេតុ​អ្វី​ត្រូវ​ចម្លង​កម្មវិធី​មិន​ស្របច្បាប់ ប្រសិនបើ​អ្នក​អាច​​យក​វា​ដោយ​​ឥត​គិត​ថ្លៃនោះ ?", "_km"); ?>
<?php item (search_software, "ត្រូវ​ការ​កម្មវិធី​ថ្មី ? កុំ​ស្វែងរក​តាមបណ្ដាញ​អី លីនុច​មាន​វា​សម្រាប់​អ្នក", "_km"); ?>
<?php item (spatial_desktop, "ឆ្ពោះ​ទៅ​រក​​ផ្ទៃតុ​ជំនាន់ក្រោយ", "_km"); ?>
<?php item (defragment, "តើ​ជីវិត​ឌីជីថលរបស់​អ្នក​ហាក់បី​ដូច​ជា​​​ការ​រៀបចំ​​ឬ ?", "_km"); ?>
<?php item (window_managers, "ជ្រើស​រូបរាង​​ផ្ទៃតុ​របស់​អ្នក", "_km"); ?>
<?php #item (network_security, "Let pirates bite the dust.", ""); ?>
<?php item (old_and_sluggish, "ហេតុ​អ្វី​បាន​ជា​វីនដូ​របស់​អ្នក​កាន់​តែ​យឺត​ពី​មួយ​ថ្ងៃ​ទៅ​មួយ​ថ្ងៃ ?", "_km"); ?>
<?php item (environment, "ធ្វើ​អ្វី​មួយ​សម្រាប់​បរិស្ថាន​", "_km"); ?>
<?php item (backdoors, "មិនមាន​​ការ​ចូល​ដំណើរការ​ដោយ​គ្មាន​ការ​អនុញ្ញាត​​ក្នុង​កម្មវិធី​របស់​អ្នក", "_km"); ?>
<?php item ("help", "រីករាយ​ជា​មួយ​នឹង​ការ​គាំទ្រ​ដោយ​ឥតគិតថ្លៃ និង​គ្មាន​ដែន​កំណត់", "_km"); ?>
<?php item (virtual_desktops, "មាន​បង្អួច​ច្រើន​ពេក ? ប្រើ​តំបន់​ធ្វើការ", "_km"); ?>
<?php #item (suspend_hibernate, "Save some energy: let your computer sleep or hibernate.", ""); ?>
<?php item (report_bugs, "មិន​ចាំបាច់​រង់ចាំ​រាប់​ឆ្នាំ​ក្នុងការ​ដោះស្រាយ​បញ្ហា​នោះ​ទេ រាយការណ៍ ហើយ​តាមដាន​កំហុស​នោះ", "_km"); ?>
<?php item (reboot_all_the_time, "តើ​អ្នក​ធុញ​ទ្រាន់​នឹង​ការ​ចាប់ផ្ដើម​កុំព្យូទ័រ​របស់​អ្នក​ឡើង​វិញ​​គ្រប់​​ពេល​ដែរឬទេ ?", "_km"); ?>
<?php item ("alive", "ឲ្យ​កុំព្យូទ័រ​ចាស់​របស់​អ្នក មាន​ជីវិត​​​ម្ដង​ទៀត", "_km"); ?>
<?php item ("free_games", "លេង​ល្បែង​រាប់រយ​ដោយ​ឥត​គិតថ្លៃ", "_km"); ?>
<?php item ("other_countries", "ជួយ​ប្រទេស​ដទៃទៀត ព្រម​ទាំង​ប្រទេស​​របស់​អ្នក​ផង​ដែរ", "_km"); ?>
<?php item ("gaim_im_services", "ប្រើ MSN, AIM, ICQ, Jabber ជា​មួយ​នឹង​​​កម្មវិធី​តែ​មួយ", "_km"); ?>
<?php item ("amarok", "ទទួល​បាន​កម្មវិធី​ចាក់​តន្ត្រី​ដ៏​អស្ចារ្យ", "_km"); ?>
<?php item ("weather", "មើល​អាកាសធាតុ", "_km"); ?>
</p>
</div>

<br class="clearboth" />

<h2>ករណី​មួយ​ចំនួន​ដែល​អ្នក​គួរ​តែ​ប្រើ​វីនដូ (ពេល​​​នេះ)</h2>

<div id="items">
<p>

<div class="item">
<a href="stick_to_windows/software/index_km.php">
<img src="stick_to_windows/software/Images/hang_thumbnail.png" />
<p>មាន​កម្មវិធី​មានកម្ម​សិទ្ធិ ដែល​អ្នក​មិន​អាច​រស់​នៅ​បាន​ដោយ​គ្មានវា</p></a>
</div>

<div class="item">
<a href="stick_to_windows/hardcore_gamer/index_km.php">
<img src="stick_to_windows/hardcore_gamer/Images/joystick_thumbnail.png" />
<p>អ្នក​គឺ​​ជា​​មនុស្ស​ដែល​ងប់ងល់​នឹង​ល្បែង</p></a>
</div>

<div class="item">
<a href="stick_to_windows/cmjn/index_km.php">
<img src="stick_to_windows/cmjn/Images/cmjn_thumbnail.png" />
<p>អ្នក​ធ្វើការ​ក្នុង​ឧស្សាហ៍​កម្ម​បោះពុម្ព/សៀវភៅ</p></a>
</div>

<div class="item">
<a href="stick_to_windows/hardware/index_km.php">
<img src="stick_to_windows/hardware/Images/hardware_thumbnail.png" />
<p>ផ្នែក​រឹង​របស់​អ្នក​មិន​​ទាន់​បាន​គាំទ្រ​នៅឡើយ​ទេ</p></a>
</div>

</p>
</div>

<br class="clearboth" />

<h2>ខ្ញុំ​ចង់​​បាន​លីនុច​ក្នុង​​កុំព្យូទ័រ​របស់​ខ្ញុំ ! តើ​ខ្ញុំ​គួរ​ធ្វើ​យ៉ាង​ដូចម្ដេច​ឥឡូវ​នេះ ?</h2>

<div id="items">
<p>

<div class="item">
<a href="switch/try/index_km.php">
<img src="switch/try/Images/blank_cd_thumb_smaller.png" />
<p>សាកល្បង​លីនុច ដោយ​មិនប៉ះពាល់​​វីនដូ</p></a>
</div>

<div class="item">
<a href="switch/install/index_km.php">
<img src="switch/install/Images/tux_thumbnail.png" />
<p>ដំឡើង​លីនុច (នៅ​តែ​​ទុក​​វីនដូ)</p></a>
</div>

</p>
</div>

<br class="clearboth" />

<p>អូ ! ប្រសិន​បើ​អ្នក​​​​មិន​ថ្នឹក​ជា​មួយ​លីនុច អ្នក​អាច​អាន <a href="faq_km.php">សំណួរ​ដែល​សួរ​រឿយៗ​នេះ</a> ។</p>

<center><img src="Images/business_news.png" /><br />
<p><small>(Cover of <a href="http://www.businessweek.com/">Business Week</a>, March 2003)</small></p></center>

<p>តំបន់បណ្ដាញ​នេះ​ត្រូវ​បានបង្កើត​ឡើង​ដោយ <a href="http://www.manucornet.net">Manu 
Cornet</a> ។ ប្រសិនបើ​អ្នក​ចង់ <b>បកប្រែ</b> តំបន់បណ្ដាញ​នេះ​ជា​ភាសា​របស់​អ្នក
 (ឬ​បញ្ចប់​ការ​បកប្រែ​ដែល​​មាន​ស្រាប់​) អ្នក​អាច​អនុវត្ត​តាម​សេចក្ដី​ណែនាំ​នៅ​ក្នុង <a href="translating_km.php">ទំព័រ​នេះ</a> ។ ប្រសិន​បើ​អ្នក​មាន​គំនិត​ចំពោះ​លក្ខណពិសេស​ល្អ​ ដើម្បី​ដាក់​​នៅ​ទីនេះ ឬ​ប្រសិន​បើ​អ្នក​មាន​រូប​ថត​អេក្រង់​ដែលកាន់​តែ​ប្រសើរ​ ឬ​ឃើញ​មាន​​​កំហុស​​អក្ខរាវិរុទ្ធ/ភាសា​អង់គ្លេស​ សូម​សរសេរ <a 
href="mailto:ideas@whylinuxisbetter.net?subject=[whylinuxisbetter.net] 
Type your subject here">ទី​នេះ</a> ។</p>

</div>
</body>
</html>
