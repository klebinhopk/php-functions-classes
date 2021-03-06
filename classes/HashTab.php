<?php

class HashTab {

	/**
	 * File location
	 * @var string
	 */
	protected $file;

	/**
	 * File contents
	 * @var string
	 */
	protected $contents;

	/**
	 * [$folder description]
	 * @var [type]
	 */
	protected $folder;

	/**
	 * [$current description]
	 * @var [type]
	 */
	protected $current;

	/**
	 * [$hashes description]
	 * @var [type]
	 */
	protected $hashes;

	/**
	 * [$result description]
	 * @var [type]
	 */
	protected $result;

	public function __construct() {

		$this->folder = $_SERVER['DOCUMENT_ROOT'] . '/cache/classes/' . __CLASS__ . '/';
		$this->hashes = new stdClass();

		if ( !file_exists( $this->folder ) && !mkdir( $this->folder, 0755, true ) ) {
			throw new Exception( "Error Processing Request", 1 );
		}

	}

	public function __toString() {
		return $this->result;
	}

	public function addFile( $file ) {

		$this->input_file = $file;

		if ( !file_exists( $file ) ) {
			return $this;
		}

		$this->file = realpath( $file );
		$this->contents = file_get_contents( $this->file );

		return $this;

	}

	public function run() {

		if ( !isset( $this->file, $this->contents ) ) {
			return false;
		}

		return $this->calc();

	}

	public function getRaw() {
		return $this->result;
	}

	public function getRawPre() {
		return '<pre>' . $this->result . '</pre>';
	}

	protected function adler32() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function blake2sp() {
		return '';
		return blake2( $this->contents );
	}

	protected function btih() {
		return '';
	}

	protected function crc32b() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function crc32() {
		return $this->crc32b();
	}

	protected function ed2k() {
		return $this->md4();
	}

	protected function gost() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function md2() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function md4() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function md5() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function ripemd128() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function ripemd256() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function ripemd320() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha1() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha256() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha256b64() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = base64_encode( hash( 'sha256', $this->contents, true ) ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha384() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha512() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha3_224() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = sha3( $this->contents, 224 ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha3_256() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = sha3( $this->contents, 256 ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha3_384() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = sha3( $this->contents, 384 ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function sha3_512() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = sha3( $this->contents, 512 ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function tth() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( file_exists( '/usr/local/bin/rhash' ) && ( ( $value = preg_split( '/\x20/', shell_exec( 'rhash --tth "' . $this->file . '"' ) ) ) !== null && isset( $value[0] ) && ( $value = $value[0] ) ) && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function tiger_192_3() {
		return file_exists( $this->current . 'tiger192,3' ) ? file_get_contents( $this->current . 'tiger192,3' ) : ( ( $value = hash( 'tiger192,3', $this->contents ) ) !== null && file_put_contents( $this->current . 'tiger192,3', $value ) !== false ? $value : '' );
	}

	protected function tiger() {
		return $this->tiger_192_3();
	}

	protected function whirlpool() {
		return file_exists( $this->current . __FUNCTION__ ) ? file_get_contents( $this->current . __FUNCTION__ ) : ( ( $value = hash( __FUNCTION__, $this->contents ) ) !== null && file_put_contents( $this->current . __FUNCTION__, $value ) !== false ? $value : '' );
	}

	protected function ripemd_128() {
		return $this->ripemd128();
	}

	protected function ripemd_256() {
		return $this->ripemd256();
	}

	protected function ripemd_320() {
		return $this->ripemd320();
	}

	protected function calc() {

		$template = 'Adler32: %s
BLAKE2sp: %s
BTIH: %s
CRC32: %s
ED2K: %s
GOST: %s
MD2: %s
MD4: %s
MD5: %s
RIPEMD-128: %s
RIPEMD-256: %s
RIPEMD-320: %s
SHA-1: %s
SHA-256: %s
SHA-256 Base64: %s
SHA-384: %s
SHA-512: %s
SHA3-224: %s
SHA3-256: %s
SHA3-384: %s
SHA3-512: %s
TTH: %s
Tiger: %s
Whirlpool: %s';

		$this->hashes->adler32 = '';
		$this->hashes->blake2sp = '';
		$this->hashes->btih = '';
		$this->hashes->crc32 = '';
		$this->hashes->ed2k = '';
		$this->hashes->gost = '';
		$this->hashes->md2 = '';
		$this->hashes->md4 = '';
		$this->hashes->md5 = md5( $this->contents );
		$this->current = $this->folder . $this->hashes->md5 . '/';

		if ( !file_exists( $this->current ) && !mkdir( $this->current, 0755, true ) ) {
			throw new Exception( "Error Processing Request", 2 );
		}

/*

CRC32: %s
ED2K: %s
GOST: %s
MD2: %s
MD4: %s
MD5: %s
RIPEMD-128: %s
RIPEMD-256: %s
RIPEMD-320: %s
SHA-1: %s
SHA-256: %s
SHA-256 Base64: %s
SHA-384: %s
SHA-512: %s
SHA3-224: %s
SHA3-256: %s
SHA3-384: %s
SHA3-512: %s
TTH: %s
Tiger: %s
Whirlpool: %s

*/

		$this->hashes->adler32 = $this->adler32();
		$this->hashes->blake2sp = $this->blake2sp();
		$this->hashes->whirlpool = $this->whirlpool();

		$template = sprintf( $template, $this->hashes->adler32, $this->hashes->blake2sp, $this->btih(), $this->crc32(), $this->ed2k(), $this->gost(), $this->md2(), $this->md4(), $this->md5(), $this->ripemd_128(), $this->ripemd_256(), $this->ripemd_320(), $this->sha1(), $this->sha256(), $this->sha256b64(), $this->sha384(), $this->sha512(), $this->sha3_224(), $this->sha3_256(), $this->sha3_384(), $this->sha3_512(), $this->tth(), $this->tiger(), $this->hashes->whirlpool );
		$template = str_replace( 'BLAKE2sp: ' . "\x0a", '', $template );
		$template = str_replace( 'BTIH: ' . "\x0a", '', $template );

		$this->result = $template;

		foreach ( $this->hashes as $key => $value ) {
			if ( $value !== '' ) {
				continue;
			}
			unset( $this->hashes->$key );
		}

		return true;

	}

	public static function staticCalc( $file ) {

		$ht = new HashTab();
		$ht->addFile( $file );
		$ht->run();

		return $ht->getRaw();

	}

	public static function staticCalcPre( $file ) {
		return '<pre>' . static::staticCalc( $file ) . '</pre>';
	}

}

?>
