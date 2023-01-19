CREATE DATABASE mandeinnaturaldb;
CREATE USER mandeinnaturaldb@localhost IDENTIFIED BY 'Kmu57vic#';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,ALTER ON mandeinnaturaldb.* TO mandeinnaturaldb@localhost;

sudo -u www-data cp /srv/www/wordpress/wp-config-sample.php /srv/www/wordpress/wp-config.php
sudo -u www-data sed -i 's/mandeinnaturaldb/wordpress/' /srv/www/wordpress/wp-config.php
sudo -u www-data sed -i 's/mandeinnatural/wordpress/' /srv/www/wordpress/wp-config.php
sudo -u www-data sed -i 's/password_here/Kmu57vic#/' /srv/www/wordpress/wp-config.php

define('AUTH_KEY',         'RV+]ann[}46A36g+G/-8texSC.R){a2Hs/LA5x^nUG+|6P82gZEe hL>Q0M=Q#+&');
define('SECURE_AUTH_KEY',  'HpGcwy@1hV=i<NqMf:h(J)I_IR}$1~Un7n?%=b5|LA:BTXhKt3r5#!J7g-.<-pf<');
define('LOGGED_IN_KEY',    '1vVdxE_l3|H|HSjZq0DWX8+K}6GJ_gP.N2t5Z{;gn-=Xt+o.jGL}FT>:-&0QYuzx');
define('NONCE_KEY',        '=Q&l@zh|1aJ$qa[W<&X!5|:fE>C_^)M|e8N-r1o6~p+f{Oza1h`p~gA ppMY5hCD');
define('AUTH_SALT',        'gSv>_]^YZMUK],@0lZ;0X@{|AqP}j+tjR6 zpkH{ w#$in,3|1}OR<s~O&$`r7h3');
define('SECURE_AUTH_SALT', 'dqN)9<cy-X35#{[F27!9+(>+3#k0C-r#[_rJ7N2Pp-`f-Iz,kPG7$Q+oS}.@r=&Z');
define('LOGGED_IN_SALT',   '`bykQoZ,Cxt*iZz3EZmx@9xx,am Y|fSmo.|w.UAO~p{A5>Xx}z1XU]@U#P3-=za');
define('NONCE_SALT',       '+1g+Y#>bGJlPLJ4ez(?N8|20+E}D4FnL8r//-K~^p|4}OPA-?r(#qLI54Rm1NO7V');