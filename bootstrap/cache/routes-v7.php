<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V3a4M6DXbg7DTi2J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ls9WHFkLorGp90Ad',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/refresh-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wCnPqScFArLSPXoe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FstGOtZenUQvezam',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/personil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Kskv3vByLeNUWyJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pPiUmdXwIvJbZLIA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/satuan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UZFBA60tvd0hJ6un',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/gol-jabatan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RmNQYdaI8fxdwfaP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/jabatan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ulq3qhOvITO20sd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/pangkat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMXo7844Q8iPVYhi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/korps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6cJndjLFKy1ngn7X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/suku-bangsa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ch92wMI91er6UjpR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/agama' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::alkVTSjdVtRj0bLF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/sumber-pa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SnRDpHKWn9k0Hi7T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/personil/golongan-darah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7LhT1OUKSjLL2w6y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/personil-import/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YZuwwcfERDshoY11',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/personil-download/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGQ1lG7XK8K3Q9Zw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/peta-jabatan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4H7ZW0ZBfCTcwjgL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SPyeWMTia9k2sRmQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P49ZChPZGfsdfRcg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HoNT94xjkOmVgc5x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user-import/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nSggVpBhVRvpKJoM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user-download/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKGHgHC4IVxaX2ft',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/satuan/lambang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KukviVtvmhzMpxcV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OtYJFphnIPUAYNAq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/satuan/tradisi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8MAPpvK2EMys0dAI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d3Pn6GmjHYG6NA6R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/satuan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lqp5zYeiE9KWXXle',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HKnmohzjpjeQD9ef',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/gol-jabatan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xdqp1n2WclI6bjub',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sf2KhTxiYrIwMFkc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/jabatan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4aLBCxuNV95gfG0M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yuyPRGqip6J2emuk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/pangkat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QFHhJ1DXE7ndJHRa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UqHxPaanshbPGa66',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/korps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Fs5LQiFlLDui1Vp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LPcKQMPsqqdbP9iH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/satuan-prestasi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2lpabKIqTzTvRZK9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::USx8KopiWb9P7HNB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/satuan-jabatan-dansat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aJE2zshVQ0QJPT7A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GuUYCiBZGcD5vqd9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/satuan-lain-lain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPem2HbdmHrvWPp4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a8SMen1pFIUQZ8ZS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kFIYH7YiTgY3EZTe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iJKKPzR2q9NGPTQ8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/list/material/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b3dVn2tjsjO1ymfY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/material-import/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UaSueMVHCVXHeR1q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/material-download/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ap5AgPkUhmJbb21U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/master/material-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cq9x3WdR9fbcRHPh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cly7jut1ISrm7mm0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/master/binsiapsat-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RpdB2T0KyBCJpdeU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KlQcjJhvqs7Zg0Ar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/binsiapsat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hGG0OFrJNCuZFRUP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qCtB6cwzCvyWTjl2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wb3eiSkFgJlKuD5X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::deh5sDqgQDFwwv7s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/chat-download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xpTWJ2pwjP5G68U2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3iojzUnGFIjVlAzr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dbTHm2Njb28VSWnt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WDJDqydk6hlNCoAe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bfQXzp5SIhYiVrZE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/agama' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5p8p5r0391FjRo5Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D4LZm9FZA8IDpO6V',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user-permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mMlH3EMQu0xbzHsi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user-personil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nEIXHoHHBh3K9cp2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/help/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TQqAyNBS39iwxDhC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s6RlaKFUWHBzhUpm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/personil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DnVhEFDL6kAek8WL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/list/personil/satuan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::udCAvLPuBbJ1czpj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/list/personil/suku-bangsa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l9o8Ad2wzQv8t8aO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/list/personil/agama' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pqvGGNKkVzWePLi6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/list/personil/sumber-pa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lc5PBxP25bE36bSo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/list/personil/golongan-darah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::66dgHF20IEEwiVNf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZyZGgvbj4BT0NLV0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/material-recommendation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KkHBTKvhBFcjMn4g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/list/material/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ggYn855IQiwyTAJ3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/searcher/satuan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nfil2PmlUtVa7R8F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PIdum8JtbpRGgbIq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/v1/(?|admin/(?|p(?|e(?|r(?|sonil(?|/([^/]++)(?|(*:59)|/(?|cat\\-personil(?|(*:86)|/([^/]++)(?|(*:105)|(*:113))|(*:122))|riwayat\\-jabatan(?|(*:150)|/([^/]++)(?|(*:170))|(*:179))|keluarga(?|(*:199)|/([^/]++)(?|(*:219)|/anak(?|(*:235)|/([^/]++)(?|(*:255))|(*:264)))|(*:274))|bahasa(?|(*:292)|/([^/]++)(?|(*:312))|(*:321))|p(?|angkat(?|(*:343)|/([^/]++)(?|(*:363))|(*:372))|endidikan\\-(?|militer(?|(*:405)|/([^/]++)(?|(*:425))|(*:434))|umum(?|(*:450)|/([^/]++)(?|(*:470))|(*:479)))|restasi(?|(*:499)|/([^/]++)(?|(*:519))|(*:528)))|t(?|ugas\\-(?|luar\\-negeri(?|(*:566)|/([^/]++)(?|(*:586))|(*:595))|operasi(?|(*:614)|/([^/]++)(?|(*:634))|(*:643)))|anda\\-jasa(?|(*:666)|/([^/]++)(?|(*:686))|(*:695)))))|\\-(?|password/([^/]++)(*:729)|download/pdf/([^/]++)(*:758)))|mission/([^/]++)(?|(*:787)))|ta\\-jabatan/([^/]++)(?|(*:820)|(*:828)))|angkat/([^/]++)(?|(*:856)))|user(?|/([^/]++)(?|(*:885))|\\-(?|p(?|assword/([^/]++)(*:919)|er(?|mission/([^/]++)(?|(*:951))|sonil/([^/]++)(?|(*:977))))|from\\-chat/([^/]++)(*:1007)))|satuan(?|/(?|lambang/([^/]++)(?|(*:1050))|tradisi/([^/]++)(?|(*:1079))|([^/]++)(?|(*:1100)))|\\-(?|prestasi/([^/]++)(?|(*:1136))|jabatan\\-dansat/([^/]++)(?|(*:1173))|lain\\-lain/([^/]++)(?|(*:1205))))|gol\\-jabatan/([^/]++)(?|(*:1241))|jabatan/([^/]++)(?|(*:1270))|korps/([^/]++)(?|(*:1297))|ma(?|terial/([^/]++)(?|(*:1330))|ster/(?|material\\-category/([^/]++)(?|(*:1378))|binsiapsat\\-category/([^/]++)(?|(*:1420))))|binsiapsat/([^/]++)(?|(*:1454))|role/([^/]++)(?|(*:1480))|agama/([^/]++)(?|(*:1507)))|searcher/(?|personil/([^/]++)(?|(*:1550)|/(?|jabatan(?|(*:1573)|/([^/]++)(*:1591))|keluarga(?|(*:1612)|/([^/]++)(?|(*:1633)|/anak(?|(*:1650)|/([^/]++)(*:1668))))|bahasa(?|(*:1689)|/([^/]++)(*:1707))|p(?|angkat(?|(*:1730)|/([^/]++)(*:1748))|endidikan\\-(?|militer(?|(*:1782)|/([^/]++)(*:1800))|umum(?|(*:1817)|/([^/]++)(*:1835))))|t(?|ugas\\-(?|luar\\-negeri(?|(*:1875)|/([^/]++)(*:1893))|operasi(?|(*:1913)|/([^/]++)(*:1931)))|anda\\-jasa(?|(*:1955)|/([^/]++)(*:1973)))))|material/([^/]++)(*:2003)|satuan/([^/]++)(*:2027))))/?$}sDu',
    ),
    3 => 
    array (
      59 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::42Sv5c0BzcgRtk2A',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FePxtpb8OCOqYcsx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JjaJbgYR2se0XCIv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A1Qc8qo5ywjHF0Zl',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IYASauufwqnGuPMO',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_jabatan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lYppmsPl1VhxRd3u',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_cat_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AXAaT6Cqo0wqlmIl',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_cat_personil',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R3ClUQZ74kRpFhzB',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::shctEcPdLXpqhIeK',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bneWDBWYc4imnW8H',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_jabatan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OoDd3hMM3r7Q6Kyh',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_jabatan',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gFXm1xyDyxsWhTP5',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_jabatan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BhGHbm0SuK8cxXw2',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8QhtwiAhnE9fUC5O',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mOvwTXLcNRtgGKUs',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uwZVxaWIXhorVtv6',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mwLO4hzIEd0n7ivY',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5HorIbPnA7ouZzfA',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n7ZUm3ILj0jYXkw3',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
            2 => 'id_anak',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k512o2vpcaUwB5Ir',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
            2 => 'id_anak',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::66kYopkQJkjEmcYP',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
            2 => 'id_anak',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kTaqAWbmyBE471Z3',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PMSfCNPMzbCeMuw7',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uJKOfQk2BX1oIOto',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NM4pHdyp2ZznKgRD',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_bahasa',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iu4tBgA7o7aDCnLR',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_bahasa',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZVqgDUWxL3K5kWhs',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_bahasa',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zwVok5DjPKGcaVUE',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iSKt6ZuOIufVEoJh',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Znbwc7cRTWaPBGoP',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pangkat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1PA0Q6FnjyrVPZnU',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pangkat',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YDWDFbPDuBLmmHn9',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pangkat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CIgzcwqLCybbZI35',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IX4Uv6TogIFhx8NG',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WlVvKQChFI4nYlhV',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_militer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7fv56x4oT9feo90z',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_militer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::47S2JcUygBPggQ0j',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_militer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0DIY77CkIZBMLJcT',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ClYwNVKZKB7fRPRK',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oTRFqxe0JRUBYjPa',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_umum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BrsDt2ZCWxvS5Pxg',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_umum',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A7VucGOaL8KAUTuI',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_umum',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::onOmwUqtkWJhZnzO',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CQMBdJ8dV2bgvkY0',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u1kI0Rm75ZR2OaHI',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_prestasi',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lW41aSSqflA0E88f',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_prestasi',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AMYwaGa3Z6u8JqfI',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_prestasi',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b5xiFPkjGRSAu3cN',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p6DU6ymOgV6wcfqU',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::57SSr5GqpbFICUeP',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_luar_negeri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nCY84BYIrjqUAiih',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_luar_negeri',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o7SjojZRy0iF17NV',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_luar_negeri',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XSNLitXjYjmn6c7M',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UsXJHB9JGkJ5hCE7',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A54BHI6TRxa0lelX',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_operasi',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::irWNN60LmNiCYUco',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_operasi',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ML01lAzsIk8IwIca',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_operasi',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zq7aITOVvw9ZjjOe',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OHbUoYv16Dn5f0RQ',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1NcoTIEcvpjvIvMj',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tanda_jasa',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NmxbYOi758NprL7g',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tanda_jasa',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2JwfYJZoVtD9djoT',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tanda_jasa',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b9HR9hQltHLNSi6r',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n00KWeNrV6YKDns4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YApfU3PUItzRdO3d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      787 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OmrL9Ae6sRcMWAMP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hqzs89fO9x2naDUE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d77wgVrPnFSNQ4Al',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x8HBweQrnJeKlLQj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gcbZLQrkUm0U9ORT',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RSgsCKcbQAiGkl6e',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IByFHZN75pDqn3IP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Poc8RHFnkjJWvNVC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3iPMY8lQpFyorDpC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sJLJPHYdADgvwo5G',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8V2UCiAwLPY1iFlB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hdJaJUfHKVVJEhNf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wkJBrsUF9vWcNciN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HEaVfLColbnksIBb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1BhxGFmXwW988w0E',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3omLGvjCl8oJ6rWb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NpJcGeFFZc9VwTaO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kcIStckpzrhsjFJ0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5BXNTWEbkANuXmcY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IVJdLfTALro6vQEt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2MH67M8BSIW5RnBf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WwVJlKmwQWRPsOp1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S35ASwDHa1vOeMY2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kPAnZyhesAJGUZBN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q0tPjDdWJgndAx4W',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mK2YirT1dmBFrLyv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xe3c4Z5xLUXSD9rd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dtEbOiuVIdChgxCT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rzl3o3KKfAkRIwtD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YajzD5xZtvEmU60x',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9IyhAjYWDZhA0CMP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JSUr586HdSzeFBGC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YHxQtctVjDKmV13g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MVOsXGClbBuQCe4l',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8yaTmUJ4opEW6sGE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HQNMZZ6aiKEgCs8F',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kOPYMpb6U6RbeBt5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fJ1sv0mA6BlsAIRZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N5Q58DCMx7VGSUhj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qjQxlImGbBaIko1W',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q6o31bEGzxDfsQgr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r6iJuRrMbFcn7OHv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9b1PG9Q5SAEvG2Rd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1x6QYLbRAY2jlSon',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dqyZefwY6Ous0zd9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FBTyuffFB8BjdwT4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Se7IEtJBHmjtqkjW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dPRkUAftwQ1HC0FE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gkbTuty0f29vHDpM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DMBfHYphpvIjtMiT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MIOJhdSvLE1iAGBx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9S0UQYfmgEycwGeq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EVtmWyXqYRbHTyTE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ly1ztPwKH4RzbJLY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dFrzmNPI34Djie3s',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L8aSO4HfuskwGNqV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::COCZHyAXzsArU7d1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j9e6P7NGCVPXlAMN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZSohrRm15yxgTdVm',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nMAP2JRiMdkImx90',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_jabatan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eVmRBaMMVy0WW3r3',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7oazZbYK296P7TAd',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8pmnIDfQ94cZuzol',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8omfSww1N7lFJwDN',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_keluarga',
            2 => 'id_anak',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ICa2gatVuNUPppzq',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G0ECAiisu9q1IMZR',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_bahasa',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8hVeLfaLGhk4wssb',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vVm6ysgz23yYdOgf',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pangkat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::82ILKdXGLuiGInD9',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Ch0omuBEtDgX90j',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_militer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EqBkyZoPppXSDkpZ',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zec9nqhNpYwGB5D3',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_pendidikan_umum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T0BD8OieketXgoHA',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQr5kViCTMbAti90',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_luar_negeri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MNIgcRPvzKa3gVC7',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a0N7G7hhT2WSscKL',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tugas_operasi',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1955 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4Ir3bdFqtkWN5wB',
          ),
          1 => 
          array (
            0 => 'id_personil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K7HvZ876QSKJjgU0',
          ),
          1 => 
          array (
            0 => 'id_personil',
            1 => 'id_tanda_jasa',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U8cVmDvWLvLNq34p',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0M5CNKG64qsLE4y9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V3a4M6DXbg7DTi2J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@masterLogin',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@masterLogin',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::V3a4M6DXbg7DTi2J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ls9WHFkLorGp90Ad' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ls9WHFkLorGp90Ad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wCnPqScFArLSPXoe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/refresh-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@rfresh',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@rfresh',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::wCnPqScFArLSPXoe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FstGOtZenUQvezam' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@registration',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@registration',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::FstGOtZenUQvezam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Kskv3vByLeNUWyJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5Kskv3vByLeNUWyJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::42Sv5c0BzcgRtk2A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::42Sv5c0BzcgRtk2A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FePxtpb8OCOqYcsx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FePxtpb8OCOqYcsx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n00KWeNrV6YKDns4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil-password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@updatePassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n00KWeNrV6YKDns4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pPiUmdXwIvJbZLIA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pPiUmdXwIvJbZLIA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjaJbgYR2se0XCIv' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JjaJbgYR2se0XCIv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UZFBA60tvd0hJ6un' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/satuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getSatuan',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getSatuan',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UZFBA60tvd0hJ6un',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RmNQYdaI8fxdwfaP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/gol-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getGolJabatan',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getGolJabatan',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RmNQYdaI8fxdwfaP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ulq3qhOvITO20sd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getJabatan',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getJabatan',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8ulq3qhOvITO20sd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NMXo7844Q8iPVYhi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/pangkat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getPangkat',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getPangkat',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NMXo7844Q8iPVYhi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6cJndjLFKy1ngn7X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/korps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getKorps',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getKorps',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6cJndjLFKy1ngn7X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ch92wMI91er6UjpR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/suku-bangsa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getSukuBangsa',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getSukuBangsa',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ch92wMI91er6UjpR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::alkVTSjdVtRj0bLF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/agama',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getAgama',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getAgama',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::alkVTSjdVtRj0bLF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SnRDpHKWn9k0Hi7T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/sumber-pa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getSumberPA',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getSumberPA',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SnRDpHKWn9k0Hi7T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7LhT1OUKSjLL2w6y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/personil/golongan-darah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getGolonganDarah',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@getGolonganDarah',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7LhT1OUKSjLL2w6y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YApfU3PUItzRdO3d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil-download/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@exportPdf',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@exportPdf',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YApfU3PUItzRdO3d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YZuwwcfERDshoY11' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil-import/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@importExcel',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@importExcel',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YZuwwcfERDshoY11',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uGQ1lG7XK8K3Q9Zw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil-download/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@exportExcel',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PersonilController@exportExcel',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uGQ1lG7XK8K3Q9Zw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A1Qc8qo5ywjHF0Zl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/cat-personil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::A1Qc8qo5ywjHF0Zl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IYASauufwqnGuPMO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/cat-personil/{id_jabatan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IYASauufwqnGuPMO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R3ClUQZ74kRpFhzB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/cat-personil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::R3ClUQZ74kRpFhzB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lYppmsPl1VhxRd3u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/cat-personil/{id_cat_personil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lYppmsPl1VhxRd3u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AXAaT6Cqo0wqlmIl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/cat-personil/{id_cat_personil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\CatPersonilController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AXAaT6Cqo0wqlmIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::shctEcPdLXpqhIeK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/riwayat-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::shctEcPdLXpqhIeK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bneWDBWYc4imnW8H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/riwayat-jabatan/{id_jabatan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bneWDBWYc4imnW8H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BhGHbm0SuK8cxXw2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/riwayat-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BhGHbm0SuK8cxXw2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OoDd3hMM3r7Q6Kyh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/riwayat-jabatan/{id_jabatan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OoDd3hMM3r7Q6Kyh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gFXm1xyDyxsWhTP5' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/riwayat-jabatan/{id_jabatan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatJabatanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gFXm1xyDyxsWhTP5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8QhtwiAhnE9fUC5O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8QhtwiAhnE9fUC5O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mOvwTXLcNRtgGKUs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mOvwTXLcNRtgGKUs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PMSfCNPMzbCeMuw7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PMSfCNPMzbCeMuw7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uwZVxaWIXhorVtv6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uwZVxaWIXhorVtv6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwLO4hzIEd0n7ivY' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mwLO4hzIEd0n7ivY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5HorIbPnA7ouZzfA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}/anak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5HorIbPnA7ouZzfA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n7ZUm3ILj0jYXkw3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n7ZUm3ILj0jYXkw3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kTaqAWbmyBE471Z3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}/anak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kTaqAWbmyBE471Z3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k512o2vpcaUwB5Ir' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::k512o2vpcaUwB5Ir',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::66kYopkQJkjEmcYP' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKeluargaAnakController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::66kYopkQJkjEmcYP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uJKOfQk2BX1oIOto' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/bahasa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uJKOfQk2BX1oIOto',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NM4pHdyp2ZznKgRD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/bahasa/{id_bahasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NM4pHdyp2ZznKgRD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zwVok5DjPKGcaVUE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/bahasa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zwVok5DjPKGcaVUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iu4tBgA7o7aDCnLR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/bahasa/{id_bahasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iu4tBgA7o7aDCnLR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZVqgDUWxL3K5kWhs' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/bahasa/{id_bahasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKemampuanBahasaController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZVqgDUWxL3K5kWhs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iSKt6ZuOIufVEoJh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pangkat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iSKt6ZuOIufVEoJh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Znbwc7cRTWaPBGoP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pangkat/{id_pangkat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Znbwc7cRTWaPBGoP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CIgzcwqLCybbZI35' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pangkat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CIgzcwqLCybbZI35',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1PA0Q6FnjyrVPZnU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pangkat/{id_pangkat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1PA0Q6FnjyrVPZnU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YDWDFbPDuBLmmHn9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pangkat/{id_pangkat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatKepangkatanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YDWDFbPDuBLmmHn9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IX4Uv6TogIFhx8NG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-militer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IX4Uv6TogIFhx8NG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WlVvKQChFI4nYlhV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WlVvKQChFI4nYlhV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0DIY77CkIZBMLJcT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-militer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0DIY77CkIZBMLJcT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7fv56x4oT9feo90z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7fv56x4oT9feo90z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::47S2JcUygBPggQ0j' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanMiliterController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::47S2JcUygBPggQ0j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ClYwNVKZKB7fRPRK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-umum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ClYwNVKZKB7fRPRK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oTRFqxe0JRUBYjPa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oTRFqxe0JRUBYjPa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::onOmwUqtkWJhZnzO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-umum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::onOmwUqtkWJhZnzO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BrsDt2ZCWxvS5Pxg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BrsDt2ZCWxvS5Pxg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A7VucGOaL8KAUTuI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPendidikanUmumController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::A7VucGOaL8KAUTuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p6DU6ymOgV6wcfqU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-luar-negeri',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::p6DU6ymOgV6wcfqU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::57SSr5GqpbFICUeP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::57SSr5GqpbFICUeP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XSNLitXjYjmn6c7M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-luar-negeri',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XSNLitXjYjmn6c7M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nCY84BYIrjqUAiih' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nCY84BYIrjqUAiih',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o7SjojZRy0iF17NV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanLuarNegeriController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::o7SjojZRy0iF17NV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UsXJHB9JGkJ5hCE7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-operasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UsXJHB9JGkJ5hCE7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A54BHI6TRxa0lelX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-operasi/{id_tugas_operasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::A54BHI6TRxa0lelX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zq7aITOVvw9ZjjOe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-operasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zq7aITOVvw9ZjjOe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::irWNN60LmNiCYUco' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-operasi/{id_tugas_operasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::irWNN60LmNiCYUco',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ML01lAzsIk8IwIca' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tugas-operasi/{id_tugas_operasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatPenugasanOperasiController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ML01lAzsIk8IwIca',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OHbUoYv16Dn5f0RQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tanda-jasa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OHbUoYv16Dn5f0RQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1NcoTIEcvpjvIvMj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tanda-jasa/{id_tanda_jasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1NcoTIEcvpjvIvMj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b9HR9hQltHLNSi6r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tanda-jasa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b9HR9hQltHLNSi6r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NmxbYOi758NprL7g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tanda-jasa/{id_tanda_jasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NmxbYOi758NprL7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2JwfYJZoVtD9djoT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/tanda-jasa/{id_tanda_jasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RiwayatTandaJasaController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2JwfYJZoVtD9djoT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CQMBdJ8dV2bgvkY0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/prestasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CQMBdJ8dV2bgvkY0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u1kI0Rm75ZR2OaHI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/prestasi/{id_prestasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u1kI0Rm75ZR2OaHI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b5xiFPkjGRSAu3cN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/prestasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b5xiFPkjGRSAu3cN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lW41aSSqflA0E88f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/prestasi/{id_prestasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lW41aSSqflA0E88f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AMYwaGa3Z6u8JqfI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/personil/{id_personil}/prestasi/{id_prestasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PrestasiController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AMYwaGa3Z6u8JqfI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4H7ZW0ZBfCTcwjgL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/peta-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4H7ZW0ZBfCTcwjgL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x8HBweQrnJeKlLQj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/peta-jabatan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::x8HBweQrnJeKlLQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SPyeWMTia9k2sRmQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/peta-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SPyeWMTia9k2sRmQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gcbZLQrkUm0U9ORT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/peta-jabatan/{id_personil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gcbZLQrkUm0U9ORT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RSgsCKcbQAiGkl6e' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/peta-jabatan/{id_personil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RSgsCKcbQAiGkl6e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P49ZChPZGfsdfRcg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::P49ZChPZGfsdfRcg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3iPMY8lQpFyorDpC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3iPMY8lQpFyorDpC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sJLJPHYdADgvwo5G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sJLJPHYdADgvwo5G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hdJaJUfHKVVJEhNf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@updatePassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hdJaJUfHKVVJEhNf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HoNT94xjkOmVgc5x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HoNT94xjkOmVgc5x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8V2UCiAwLPY1iFlB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8V2UCiAwLPY1iFlB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nSggVpBhVRvpKJoM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-import/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@importExcel',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@importExcel',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nSggVpBhVRvpKJoM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NKGHgHC4IVxaX2ft' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user-download/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@exportExcel',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@exportExcel',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NKGHgHC4IVxaX2ft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NpJcGeFFZc9VwTaO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user-from-chat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@fromChat',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserController@fromChat',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NpJcGeFFZc9VwTaO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KukviVtvmhzMpxcV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan/lambang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KukviVtvmhzMpxcV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OtYJFphnIPUAYNAq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan/lambang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OtYJFphnIPUAYNAq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kcIStckpzrhsjFJ0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan/lambang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kcIStckpzrhsjFJ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5BXNTWEbkANuXmcY' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan/lambang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLambangController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5BXNTWEbkANuXmcY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8MAPpvK2EMys0dAI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan/tradisi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8MAPpvK2EMys0dAI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d3Pn6GmjHYG6NA6R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan/tradisi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::d3Pn6GmjHYG6NA6R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IVJdLfTALro6vQEt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan/tradisi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IVJdLfTALro6vQEt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2MH67M8BSIW5RnBf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan/tradisi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanTradisiController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2MH67M8BSIW5RnBf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lqp5zYeiE9KWXXle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Lqp5zYeiE9KWXXle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WwVJlKmwQWRPsOp1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WwVJlKmwQWRPsOp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HKnmohzjpjeQD9ef' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HKnmohzjpjeQD9ef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S35ASwDHa1vOeMY2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::S35ASwDHa1vOeMY2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kPAnZyhesAJGUZBN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kPAnZyhesAJGUZBN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xdqp1n2WclI6bjub' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/gol-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Xdqp1n2WclI6bjub',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sf2KhTxiYrIwMFkc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/gol-jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sf2KhTxiYrIwMFkc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MVOsXGClbBuQCe4l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/gol-jabatan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MVOsXGClbBuQCe4l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8yaTmUJ4opEW6sGE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/gol-jabatan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\GolJabatanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8yaTmUJ4opEW6sGE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4aLBCxuNV95gfG0M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4aLBCxuNV95gfG0M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuyPRGqip6J2emuk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yuyPRGqip6J2emuk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HQNMZZ6aiKEgCs8F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/jabatan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HQNMZZ6aiKEgCs8F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kOPYMpb6U6RbeBt5' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/jabatan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\JabatanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kOPYMpb6U6RbeBt5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QFHhJ1DXE7ndJHRa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/pangkat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QFHhJ1DXE7ndJHRa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UqHxPaanshbPGa66' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/pangkat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UqHxPaanshbPGa66',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IByFHZN75pDqn3IP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/pangkat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IByFHZN75pDqn3IP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Poc8RHFnkjJWvNVC' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/pangkat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PangkatController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Poc8RHFnkjJWvNVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Fs5LQiFlLDui1Vp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/korps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8Fs5LQiFlLDui1Vp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LPcKQMPsqqdbP9iH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/korps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LPcKQMPsqqdbP9iH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fJ1sv0mA6BlsAIRZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/korps/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fJ1sv0mA6BlsAIRZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N5Q58DCMx7VGSUhj' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/korps/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KorpsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::N5Q58DCMx7VGSUhj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2lpabKIqTzTvRZK9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-prestasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2lpabKIqTzTvRZK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q0tPjDdWJgndAx4W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-prestasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::q0tPjDdWJgndAx4W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::USx8KopiWb9P7HNB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-prestasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::USx8KopiWb9P7HNB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mK2YirT1dmBFrLyv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-prestasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mK2YirT1dmBFrLyv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xe3c4Z5xLUXSD9rd' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan-prestasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPrestasiController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xe3c4Z5xLUXSD9rd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aJE2zshVQ0QJPT7A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-jabatan-dansat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aJE2zshVQ0QJPT7A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dtEbOiuVIdChgxCT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-jabatan-dansat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dtEbOiuVIdChgxCT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GuUYCiBZGcD5vqd9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-jabatan-dansat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GuUYCiBZGcD5vqd9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rzl3o3KKfAkRIwtD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-jabatan-dansat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Rzl3o3KKfAkRIwtD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YajzD5xZtvEmU60x' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan-jabatan-dansat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanJabatanDansatController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YajzD5xZtvEmU60x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPem2HbdmHrvWPp4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-lain-lain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jPem2HbdmHrvWPp4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9IyhAjYWDZhA0CMP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-lain-lain/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9IyhAjYWDZhA0CMP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a8SMen1pFIUQZ8ZS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-lain-lain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::a8SMen1pFIUQZ8ZS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JSUr586HdSzeFBGC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-lain-lain/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JSUr586HdSzeFBGC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YHxQtctVjDKmV13g' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan-lain-lain/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanLainLainController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YHxQtctVjDKmV13g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kFIYH7YiTgY3EZTe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kFIYH7YiTgY3EZTe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qjQxlImGbBaIko1W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/material/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qjQxlImGbBaIko1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q6o31bEGzxDfsQgr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/material/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::q6o31bEGzxDfsQgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iJKKPzR2q9NGPTQ8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iJKKPzR2q9NGPTQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r6iJuRrMbFcn7OHv' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/material/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::r6iJuRrMbFcn7OHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b3dVn2tjsjO1ymfY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/list/material/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@getCategoryList',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@getCategoryList',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b3dVn2tjsjO1ymfY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UaSueMVHCVXHeR1q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/material-import/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@importExcel',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@importExcel',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UaSueMVHCVXHeR1q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ap5AgPkUhmJbb21U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/material-download/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@exportExcel',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\MaterialController@exportExcel',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ap5AgPkUhmJbb21U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cq9x3WdR9fbcRHPh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/master/material-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::Cq9x3WdR9fbcRHPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9b1PG9Q5SAEvG2Rd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/master/material-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::9b1PG9Q5SAEvG2Rd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1x6QYLbRAY2jlSon' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/admin/master/material-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::1x6QYLbRAY2jlSon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cly7jut1ISrm7mm0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/master/material-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::cly7jut1ISrm7mm0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dqyZefwY6Ous0zd9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/master/material-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterMaterialCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::dqyZefwY6Ous0zd9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RpdB2T0KyBCJpdeU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/master/binsiapsat-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::RpdB2T0KyBCJpdeU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FBTyuffFB8BjdwT4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/master/binsiapsat-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::FBTyuffFB8BjdwT4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Se7IEtJBHmjtqkjW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/admin/master/binsiapsat-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::Se7IEtJBHmjtqkjW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KlQcjJhvqs7Zg0Ar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/master/binsiapsat-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::KlQcjJhvqs7Zg0Ar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dPRkUAftwQ1HC0FE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/master/binsiapsat-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\Master\\MasterBinsiapsatCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/master',
        'where' => 
        array (
        ),
        'as' => 'generated::dPRkUAftwQ1HC0FE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hGG0OFrJNCuZFRUP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hGG0OFrJNCuZFRUP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gkbTuty0f29vHDpM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gkbTuty0f29vHDpM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DMBfHYphpvIjtMiT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DMBfHYphpvIjtMiT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qCtB6cwzCvyWTjl2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qCtB6cwzCvyWTjl2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MIOJhdSvLE1iAGBx' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/binsiapsat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MIOJhdSvLE1iAGBx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wb3eiSkFgJlKuD5X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\ChatController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wb3eiSkFgJlKuD5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::deh5sDqgQDFwwv7s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\ChatController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\ChatController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::deh5sDqgQDFwwv7s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xpTWJ2pwjP5G68U2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/chat-download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\ChatController@download',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\ChatController@download',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xpTWJ2pwjP5G68U2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3iojzUnGFIjVlAzr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3iojzUnGFIjVlAzr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9S0UQYfmgEycwGeq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9S0UQYfmgEycwGeq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EVtmWyXqYRbHTyTE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EVtmWyXqYRbHTyTE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dbTHm2Njb28VSWnt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dbTHm2Njb28VSWnt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ly1ztPwKH4RzbJLY' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleAdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ly1ztPwKH4RzbJLY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WDJDqydk6hlNCoAe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WDJDqydk6hlNCoAe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OmrL9Ae6sRcMWAMP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OmrL9Ae6sRcMWAMP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hqzs89fO9x2naDUE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Hqzs89fO9x2naDUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bfQXzp5SIhYiVrZE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bfQXzp5SIhYiVrZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d77wgVrPnFSNQ4Al' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PermissionAdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::d77wgVrPnFSNQ4Al',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5p8p5r0391FjRo5Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/agama',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5p8p5r0391FjRo5Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dFrzmNPI34Djie3s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/agama/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dFrzmNPI34Djie3s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L8aSO4HfuskwGNqV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/agama/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::L8aSO4HfuskwGNqV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D4LZm9FZA8IDpO6V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/agama',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::D4LZm9FZA8IDpO6V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::COCZHyAXzsArU7d1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/agama/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\AgamaAdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::COCZHyAXzsArU7d1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wkJBrsUF9vWcNciN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user-permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPermissionAdminController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPermissionAdminController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wkJBrsUF9vWcNciN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HEaVfLColbnksIBb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPermissionAdminController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPermissionAdminController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HEaVfLColbnksIBb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mMlH3EMQu0xbzHsi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPermissionAdminController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPermissionAdminController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mMlH3EMQu0xbzHsi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1BhxGFmXwW988w0E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user-personil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPersonilAdminController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPersonilAdminController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1BhxGFmXwW988w0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3omLGvjCl8oJ6rWb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-personil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPersonilAdminController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPersonilAdminController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3omLGvjCl8oJ6rWb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nEIXHoHHBh3K9cp2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-personil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPersonilAdminController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\UserPersonilAdminController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nEIXHoHHBh3K9cp2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TQqAyNBS39iwxDhC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/help/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\HelpTicketController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\HelpTicketController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TQqAyNBS39iwxDhC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6RlaKFUWHBzhUpm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/help/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\HelpTicketController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\HelpTicketController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::s6RlaKFUWHBzhUpm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DnVhEFDL6kAek8WL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::DnVhEFDL6kAek8WL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j9e6P7NGCVPXlAMN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::j9e6P7NGCVPXlAMN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::udCAvLPuBbJ1czpj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/list/personil/satuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getSatuan',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getSatuan',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::udCAvLPuBbJ1czpj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l9o8Ad2wzQv8t8aO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/list/personil/suku-bangsa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getSukuBangsa',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getSukuBangsa',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::l9o8Ad2wzQv8t8aO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pqvGGNKkVzWePLi6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/list/personil/agama',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getAgama',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getAgama',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::pqvGGNKkVzWePLi6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lc5PBxP25bE36bSo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/list/personil/sumber-pa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getSumberPA',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getSumberPA',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::Lc5PBxP25bE36bSo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::66dgHF20IEEwiVNf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/list/personil/golongan-darah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getGolonganDarah',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\PersonilSearcherController@getGolonganDarah',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::66dgHF20IEEwiVNf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZSohrRm15yxgTdVm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/jabatan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatJabatanSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatJabatanSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::ZSohrRm15yxgTdVm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nMAP2JRiMdkImx90' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/jabatan/{id_jabatan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatJabatanSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatJabatanSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::nMAP2JRiMdkImx90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eVmRBaMMVy0WW3r3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/keluarga',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::eVmRBaMMVy0WW3r3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7oazZbYK296P7TAd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/keluarga/{id_keluarga}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::7oazZbYK296P7TAd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8pmnIDfQ94cZuzol' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/keluarga/{id_keluarga}/anak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaAnakSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaAnakSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::8pmnIDfQ94cZuzol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8omfSww1N7lFJwDN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaAnakSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKeluargaAnakSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::8omfSww1N7lFJwDN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ICa2gatVuNUPppzq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/bahasa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKemampuanBahasaSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKemampuanBahasaSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::ICa2gatVuNUPppzq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G0ECAiisu9q1IMZR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/bahasa/{id_bahasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKemampuanBahasaSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKemampuanBahasaSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::G0ECAiisu9q1IMZR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8hVeLfaLGhk4wssb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/pangkat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKepangkatanSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKepangkatanSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::8hVeLfaLGhk4wssb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vVm6ysgz23yYdOgf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/pangkat/{id_pangkat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKepangkatanSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatKepangkatanSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::vVm6ysgz23yYdOgf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::82ILKdXGLuiGInD9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/pendidikan-militer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanMiliterSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanMiliterSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::82ILKdXGLuiGInD9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Ch0omuBEtDgX90j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanMiliterSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanMiliterSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::6Ch0omuBEtDgX90j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EqBkyZoPppXSDkpZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/pendidikan-umum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanUmumSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanUmumSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::EqBkyZoPppXSDkpZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zec9nqhNpYwGB5D3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanUmumSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPendidikanUmumSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::Zec9nqhNpYwGB5D3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T0BD8OieketXgoHA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/tugas-luar-negeri',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanLuarNegeriSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanLuarNegeriSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::T0BD8OieketXgoHA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sQr5kViCTMbAti90' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanLuarNegeriSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanLuarNegeriSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::sQr5kViCTMbAti90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MNIgcRPvzKa3gVC7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/tugas-operasi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanOperasiSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanOperasiSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::MNIgcRPvzKa3gVC7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a0N7G7hhT2WSscKL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/tugas-operasi/{id_tugas_operasi}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanOperasiSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\RiwayatPenugasanOperasiSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::a0N7G7hhT2WSscKL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v4Ir3bdFqtkWN5wB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/tanda-jasa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\TandaJasaSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\TandaJasaSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::v4Ir3bdFqtkWN5wB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K7HvZ876QSKJjgU0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/personil/{id_personil}/tanda-jasa/{id_tanda_jasa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\TandaJasaSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\TandaJasaSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::K7HvZ876QSKJjgU0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZyZGgvbj4BT0NLV0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::ZyZGgvbj4BT0NLV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U8cVmDvWLvLNq34p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/material/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::U8cVmDvWLvLNq34p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KkHBTKvhBFcjMn4g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/material-recommendation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@material_recommended',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@material_recommended',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::KkHBTKvhBFcjMn4g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ggYn855IQiwyTAJ3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/list/material/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@getCategoryList',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\MaterialSearcherController@getCategoryList',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::ggYn855IQiwyTAJ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nfil2PmlUtVa7R8F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/satuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\SatuanSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\SatuanSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::Nfil2PmlUtVa7R8F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0M5CNKG64qsLE4y9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/satuan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\SatuanSearcherController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\SatuanSearcherController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::0M5CNKG64qsLE4y9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PIdum8JtbpRGgbIq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000059c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PIdum8JtbpRGgbIq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
