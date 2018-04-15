<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpcurso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' 3]xRC}2isMqBjfA&O$mw>&u+}7{,-:SLo$BC1iL42gJ2.[C!OJ2%X>t=X}@p]gs');
define('SECURE_AUTH_KEY',  's}(uV>#MUN3<35HL@%e;0{}Ebb4^_h:^):ZzDwgUM!G|toe68V?Y:rvi)h*AA+Bj');
define('LOGGED_IN_KEY',    '2QGO7^?Im5!u;7kWb^/#Z7pVVePUNJk^WlISGHdWC*C(3h%3$4CPqPE3@{v|6hB3');
define('NONCE_KEY',        'Fzz|MdntbZP}rOYB|j8>^xo[:S!XPQ2j.]^Zgqgx&LsGeFFeA3@8NJc0JO6M*$7*');
define('AUTH_SALT',        'FDn~3y;?i)cv:9<3.6Sf>1y7|UiU7|*_#}A+=,Vu5u`fVcq+J^(>`>ZBrZv8dD!@');
define('SECURE_AUTH_SALT', '?s(RTpW{M(za*EB!=3M|I3)*Gm7y r$ktw2,`us,]Sa4tk`a[$6)XDfx_^9N:x50');
define('LOGGED_IN_SALT',   'Si4tqZ:d-1+#6W+?[6o:4by2}(u{+z2&K@G6[*vo*=%93b?Ebb~9>qH6/8ZA,1bv');
define('NONCE_SALT',       'r6^S&Z~N|u& <3d$(Vs_@X`02/JRtJ(#`-|7z0w~SKi6&byC#R,B$hkA{a?P/:O*');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpfore_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
