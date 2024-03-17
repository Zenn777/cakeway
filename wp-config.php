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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cakewaywp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '(_2=OTwNcX&`PV;J2!}X]Q6v<4TTu5E|bP]-Bsi5{$u1C4XJlK6>Cn<@918pf?El' );
define( 'SECURE_AUTH_KEY',  'u5_U-fqV)Tmh^O6sm~wQl&Pw!(mG|/Ax!A$Hk}9<Zl{x,^9KnmZh`+te|Wx *}FS' );
define( 'LOGGED_IN_KEY',    '?k20Lv5RE=Z.yJ9MJcb9w-<P2-<!w$~&|:nLQb!S(~V[YR+E*x2#-ZvMX}H^Ik4)' );
define( 'NONCE_KEY',        ')FNBid,!fedEd|<<}uroK&jm6LOY}YI/^b^E[rV+nBZZ&&:zcZp|^hNd_q+eV+.m' );
define( 'AUTH_SALT',        '5tf^g:;=XPRF$xz[GDKl27ZOspL`&0cai@/)Qfpal0&CC{7rC*bB,[#nS0XPy)pm' );
define( 'SECURE_AUTH_SALT', 'OZT4nZfc_@Lm|%$mM,x$yt)3E er|F<vNW&Iy/WE-kz9~^:/(g]=$zH-jSsO90i@' );
define( 'LOGGED_IN_SALT',   'yh8r~+6iPuN?#D|@>,.EjFNPkmk#XH,|o/]<Du[v,.i`>Nh-wak~#.[u;1q*{f5R' );
define( 'NONCE_SALT',       'F:aK-&{N-HyY#dw|oH%btrxqY;fItZb.;)m;Yw;b8}){0GZ?V/rJw(*wBJ6n<i,R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';