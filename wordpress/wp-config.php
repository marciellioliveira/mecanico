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
define('DB_NAME', 'mecanico');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'XGm~I#02}Kz aJU1lUq$+;~!pK0*HSI&l=UV{[y[aAU*)Tp_|GME<^}9YDk>+tpz');
define('SECURE_AUTH_KEY',  'cZ?/BV9In--Fr(,&jtTQN#zMi/Yc7MWI5hib%^w$VrDZj;l/U;v>B0C*E~1sb!qm');
define('LOGGED_IN_KEY',    'y.N6Tn=5P. )pJJw6aLf-0%2][]rV95xwvg#:KZ(aSPT3nSx}2- x%v~m-.xi%G8');
define('NONCE_KEY',        ' Sp_HYHX_igb/V~A(L#]gkTbS7U<8.wa?#QQNRqB+/|)rvQY{2Zcv<JORT*:hvW9');
define('AUTH_SALT',        ')G4g-@Q]M2~*.oQ@qebuv!;PGB/fyFSPTWg4-vy&BApQZ5@G2.d6nn3.)qPC6&Mn');
define('SECURE_AUTH_SALT', 'Vgc@kO*ot~W6ML>^9#!I:2}0nT1O]{&8KQ)dm_K!cHB%5dwndK9E.+3;k28_UL|+');
define('LOGGED_IN_SALT',   ';*~M[:Gr-.v[U/QOp S^xR+A-PCL<:Hl_%M%/.[Np?XdgZ9vQcAfre`rOzdW?p@Q');
define('NONCE_SALT',       'lq(sd^bc=c]2H3~hrR}<H|/mZt]NsSG8..Kxg~Z*|5B4<lb*Y._G,EmP1?/Wh+ir');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
