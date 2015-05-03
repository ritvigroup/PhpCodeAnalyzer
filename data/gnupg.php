<?php
return array(
    'functions' => array(
        'gnupg_adddecryptke',
        'gnupg_addencryptke',
        'gnupg_addsignke',
        'gnupg_cleardecryptkey',
        'gnupg_clearencryptkey',
        'gnupg_clearsignkey',
        'gnupg_decryp',
        'gnupg_decryptverif',
        'gnupg_encryp',
        'gnupg_encryptsig',
        'gnupg_expor',
        'gnupg_geterro',
        'gnupg_getprotoco',
        'gnupg_impor',
        'gnupg_ini',
        'gnupg_keyinf',
        'gnupg_setarmo',
        'gnupg_seterrormod',
        'gnupg_setsignmod',
        'gnupg_sig',
        'gnupg_verif',
    ),
    'constants' => array(
        'GNUPG_SIG_MODE_NORMAL',
        'GNUPG_SIG_MODE_DETACH',
        'GNUPG_SIG_MODE_CLEAR',
        'GNUPG_VALIDITY_UNKNOWN',
        'GNUPG_VALIDITY_UNDEFINED',
        'GNUPG_VALIDITY_NEVER',
        'GNUPG_VALIDITY_MARGINAL',
        'GNUPG_VALIDITY_FULL',
        'GNUPG_VALIDITY_ULTIMATE',
        'GNUPG_PROTOCOL_OpenPGP',
        'GNUPG_PROTOCOL_CMS',
        'GNUPG_SIGSUM_VALID',
        'GNUPG_SIGSUM_GREEN',
        'GNUPG_SIGSUM_RED',
        'GNUPG_SIGSUM_KEY_REVOKED',
        'GNUPG_SIGSUM_KEY_EXPIRED',
        'GNUPG_SIGSUM_KEY_MISSING',
        'GNUPG_SIGSUM_SIG_EXPIRED',
        'GNUPG_SIGSUM_CRL_MISSING',
        'GNUPG_SIGSUM_CRL_TOO_OLD',
        'GNUPG_SIGSUM_BAD_POLICY',
        'GNUPG_SIGSUM_SYS_ERROR',
        'GNUPG_ERROR_WARNING',
        'GNUPG_ERROR_EXCEPTION',
        'GNUPG_ERROR_SILENT',
    ),
    'description' => 'GNU Privacy Guard',
);