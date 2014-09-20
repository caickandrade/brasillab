<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'brasillab');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B*f-M$.&?@zSAT^YWWc~ZtttsV  5j@QWgNM->s1x6-xqNDW6Ztko:mf}A>*So2q');
define('SECURE_AUTH_KEY',  't3In.9GDc2Eva2Q@53^:Do@X.@Pa%>%~ GO&8!yt^FZ*:Sr8GUR!*y=C,SH`NZ-R');
define('LOGGED_IN_KEY',    'jkO28a-XC%B-<8yb3:Fm4>O:RnJvIUW8xg3g<^-CJ8I;2hp-B$2tidYICrG2?`A/');
define('NONCE_KEY',        'jwvN?.ShT~CiOR&vmH.$BmoUE$[;0d&.,;<o^o!Vp$7RzCg~NS8Nn8<KqfwHBZ$B');
define('AUTH_SALT',        ' sf{^t }_wM+jc$^Dh!=!V.?R9?cMp7f1z,1.(-` ZlfyS!D{c3BcKBPU-K!VKS3');
define('SECURE_AUTH_SALT', 'c?ejyE(G6t8/6_`>}+HBXu?a| 0< %kFX|XQg?wNsX[!O{CPtX$AsODW@Cq_Fas0');
define('LOGGED_IN_SALT',   'c6`fTXC{_t.r*Db<|NETM|f}P{+*]fp3g!b. WY;-Nc^S0arB,U*(!Mp# }DGV[V');
define('NONCE_SALT',       'C5/3D_l[-wwf+B)tc3NlOHSe*N>dD),k2*r{6N|8&=oBo|wlN6>mjw!/>zVE&%k~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
