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
            '_route' => 'generated::D6Mz7zxNGQUToVyo',
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
            '_route' => 'generated::1yyf2vyIZZsvbRrH',
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
            '_route' => 'generated::050aFWsYa260PG6K',
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
            '_route' => 'generated::bBiOJtDoGk8kumT9',
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
            '_route' => 'generated::VhuT7mf4NX94ZvyT',
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
            '_route' => 'generated::F2VpB2dfkysSVHOd',
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
            '_route' => 'generated::mezupnlaWYaHkwGb',
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
            '_route' => 'generated::UISvgiicc39r2pdd',
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
            '_route' => 'generated::II6U0yfhrmjhJlac',
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
            '_route' => 'generated::WWC1c6mQgkHK7W0E',
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
            '_route' => 'generated::efVG5Tnlfu1gcMz0',
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
            '_route' => 'generated::BTUAbunlONZcbX0S',
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
            '_route' => 'generated::cWGAi1IRjVkYrMVF',
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
            '_route' => 'generated::1LprK6ql0d3N7iKh',
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
            '_route' => 'generated::MAqMXYVgbqho1JYu',
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
            '_route' => 'generated::gEBoNrLViYe12NFo',
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
            '_route' => 'generated::oFad1DNYG4rMvgCT',
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
      '/api/v1/admin/kompers-satjar/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XktCMPqakMhpBMwM',
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
            '_route' => 'generated::u4Agw2neJsOjf8WC',
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
      '/api/v1/admin/kompers-satjar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ghfiPVPw49Y3k6C4',
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
            '_route' => 'generated::FnXcsXb8DIdpDhSY',
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
      '/api/v1/admin/peta-jabatan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XWqvngO5RQAka5hx',
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
            '_route' => 'generated::NlqrmtVv20lXD9du',
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
      '/api/v1/admin/peta-jabatan/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GaeSzWuLavDjXWhX',
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
      '/api/v1/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dV5zw9pVmMg04SsF',
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
            '_route' => 'generated::JBUVssrjccqvVyTF',
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
            '_route' => 'generated::wsztewklSfoUi2Y8',
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
            '_route' => 'generated::bYqG8HzRMRj0Nyvs',
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
            '_route' => 'generated::pLpmoqQsXpchglNd',
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
            '_route' => 'generated::aFhtsqcCk7ChKM6T',
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
            '_route' => 'generated::TjxrO8Rfwn37J3hw',
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
            '_route' => 'generated::pMsiaBk8IZHbgvOi',
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
            '_route' => 'generated::ZqcMxxqA6DUj2fld',
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
            '_route' => 'generated::Rlmww4m3KC4oSHIz',
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
            '_route' => 'generated::ZX6nVjDLAIwuJWzm',
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
            '_route' => 'generated::kC3UfCT7ObO4DmIL',
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
            '_route' => 'generated::JNyTdgGiPvp5MRjF',
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
            '_route' => 'generated::Kf3gVYIBOwKd3pcw',
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
            '_route' => 'generated::OLZ0MdxN8zKSXUg1',
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
            '_route' => 'generated::BQ7W4cdzp1RPciMw',
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
            '_route' => 'generated::opbW8c3HlltEVBwJ',
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
            '_route' => 'generated::9lvRLWeM4qLZHuEw',
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
            '_route' => 'generated::KOkRuESyl3J2Libd',
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
            '_route' => 'generated::CRSGBTIivEb3bQvY',
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
            '_route' => 'generated::yBSSQsf6q9gSn6uj',
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
            '_route' => 'generated::e1LGMwshzqDGO245',
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
      '/api/v1/admin/satuan-purnawirawan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TjGHAE9lkodDO8hv',
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
            '_route' => 'generated::BrUmZPM9ZM2l8QDm',
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
            '_route' => 'generated::RB0hm9okQ7tZIjqA',
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
            '_route' => 'generated::sGNYDNuXCxkfvT9a',
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
            '_route' => 'generated::uZxaMpnDPoUUjpq6',
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
            '_route' => 'generated::BtCKyYp6FmtGqJTO',
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
            '_route' => 'generated::ahadKJZLyM8a4TSg',
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
            '_route' => 'generated::IzTM2FjHsiRfQ8g7',
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
            '_route' => 'generated::3fwydUl0C3Q8ZZPF',
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
            '_route' => 'generated::vPYtAyeEfmUjfXHq',
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
            '_route' => 'generated::xpg3YeMGs4VBvkVx',
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
            '_route' => 'generated::q9exrK6t2gG3aEhy',
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
            '_route' => 'generated::xOLZUYdPTSA4926W',
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
      '/api/v1/admin/binsiapsat/binsat/laplakgiat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8KA9OZ2taNDcsQav',
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
            '_route' => 'generated::ebFKHk21DvUBTM8t',
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
      '/api/v1/admin/binsiapsat/binsat/renlakgiat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AASFTDkdoT4ps94r',
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
            '_route' => 'generated::n0lp4S0T5D2jhM62',
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
      '/api/v1/admin/binsiapsat/lapsat/lampiran' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PEphxlqQX0ksUf7u',
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
            '_route' => 'generated::0TmUUCo2p6itSrtM',
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
      '/api/v1/admin/binsiapsat/lapsat/induk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MxONXteBdQfQlpH6',
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
            '_route' => 'generated::RLtTEhSVs2L4Giv2',
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
      '/api/v1/admin/binsiapsat/induk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v7ROxNpapCesACKG',
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
            '_route' => 'generated::iFYv88kTzGFeCj4k',
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
            '_route' => 'generated::FSYWiH3DEyfVYCou',
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
            '_route' => 'generated::jyDGy8M4vj5p25zC',
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
      '/api/v1/admin/learning' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYWT81swSWwTbamp',
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
            '_route' => 'generated::1UVf9o0ypGEMEupu',
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
            '_route' => 'generated::aidsBWltKZ8p04lM',
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
            '_route' => 'generated::7EQye0jGmIM6vNL2',
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
            '_route' => 'generated::OceDMHveziKUKLYK',
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
            '_route' => 'generated::0Wt9HyKXDfuRbHxQ',
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
            '_route' => 'generated::fT13DykCXjR9qv6P',
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
            '_route' => 'generated::L0h3XRBVhWufO4jX',
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
            '_route' => 'generated::n7vkhPVechx3tibM',
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
      '/api/v1/admin/role-permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OGqiIAKThG7Dp1Ly',
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
      '/api/v1/admin/agama' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lFk507ujKRRL4n0c',
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
            '_route' => 'generated::mkHGM7PfOwyLjDQo',
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
            '_route' => 'generated::StbUJgAc5d1KXpAG',
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
            '_route' => 'generated::50eSUqL5tVEb6bas',
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
            '_route' => 'generated::kmhTFNkA1APmjevC',
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
            '_route' => 'generated::dP4ph75R6Rnm2pgt',
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
      '/api/v1/searcher/binsiapsat/binsat/renlakgiat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qj4nQvqHot3o8Hix',
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
      '/api/v1/searcher/binsiapsat/binsat/laplakgiat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y2Rl9wW6FYXe0bPf',
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
      '/api/v1/searcher/binsiapsat/lapsat/induk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WnTRv8PGdpJ3ukYD',
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
      '/api/v1/searcher/binsiapsat/lapsat/lampiran' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iQwWs3VCh1wMVJmE',
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
      '/api/v1/searcher/personil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MqRmzSlqPfKOtTnL',
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
            '_route' => 'generated::5sKNYxRSyYWmEqYs',
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
            '_route' => 'generated::6L4MfLVLNUOQ2KL5',
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
            '_route' => 'generated::hkf3cOzHP2ps50Pj',
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
            '_route' => 'generated::Iq6UAt3OTqz8zYP0',
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
            '_route' => 'generated::8Bdwgx2vBCpmn4FN',
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
            '_route' => 'generated::JAF8JbCqLfcuhYTq',
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
            '_route' => 'generated::ftP3LgjYmoaEL0CK',
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
            '_route' => 'generated::sb8XNFSr1DaoWZsO',
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
            '_route' => 'generated::CD9C2NZN9oLCPMVG',
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
            '_route' => 'generated::qCRmxyo0qb8mP9iX',
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
      0 => '{^(?|/api/v1/(?|admin/(?|p(?|e(?|r(?|sonil(?|/([^/]++)(?|(*:59)|/(?|cat\\-personil(?|(*:86)|/([^/]++)(?|(*:105)|(*:113))|(*:122))|riwayat\\-jabatan(?|(*:150)|/([^/]++)(?|(*:170))|(*:179))|keluarga(?|(*:199)|/([^/]++)(?|(*:219)|/anak(?|(*:235)|/([^/]++)(?|(*:255))|(*:264)))|(*:274))|bahasa(?|(*:292)|/([^/]++)(?|(*:312))|(*:321))|p(?|angkat(?|(*:343)|/([^/]++)(?|(*:363))|(*:372))|endidikan\\-(?|militer(?|(*:405)|/([^/]++)(?|(*:425))|(*:434))|umum(?|(*:450)|/([^/]++)(?|(*:470))|(*:479)))|restasi(?|(*:499)|/([^/]++)(?|(*:519))|(*:528)))|t(?|ugas\\-(?|luar\\-negeri(?|(*:566)|/([^/]++)(?|(*:586))|(*:595))|operasi(?|(*:614)|/([^/]++)(?|(*:634))|(*:643)))|anda\\-jasa(?|(*:666)|/([^/]++)(?|(*:686))|(*:695)))))|\\-(?|password/([^/]++)(*:729)|download/pdf/([^/]++)(*:758)))|mission/([^/]++)(?|(*:787)))|ta\\-jabatan/([^/]++)(?|(*:820)|(*:828)))|angkat/([^/]++)(?|(*:856)))|ko(?|mpers\\-satjar/([^/]++)(?|(*:896))|rps/([^/]++)(?|(*:920)))|user(?|/([^/]++)(?|(*:949))|\\-(?|p(?|assword/([^/]++)(*:983)|er(?|mission/([^/]++)(?|(*:1015))|sonil/([^/]++)(?|(*:1042))))|from\\-chat/([^/]++)(*:1073)))|satuan(?|/(?|lambang/([^/]++)(?|(*:1116))|tradisi/([^/]++)(?|(*:1145))|([^/]++)(?|(*:1166)))|\\-(?|p(?|restasi/([^/]++)(?|(*:1205))|urnawirawan/([^/]++)(?|(*:1238)))|jabatan\\-dansat/([^/]++)(?|(*:1276))|lain\\-lain/([^/]++)(?|(*:1308))))|gol\\-jabatan/([^/]++)(?|(*:1344))|jabatan/([^/]++)(?|(*:1373))|ma(?|terial/([^/]++)(?|(*:1406))|ster/(?|material\\-category/([^/]++)(?|(*:1454))|binsiapsat\\-category/([^/]++)(?|(*:1496))))|binsiapsat/(?|binsat/(?|laplakgiat/([^/]++)(?|(*:1554))|renlakgiat/([^/]++)(?|(*:1586)))|lapsat/(?|lampiran/([^/]++)(?|(*:1627))|induk/([^/]++)(?|(*:1654)))|induk/([^/]++)(?|(*:1682))|([^/]++)(?|(*:1703)))|learning/([^/]++)(?|(*:1734))|role/([^/]++)(?|(*:1760))|agama/([^/]++)(?|(*:1787)))|searcher/(?|personil/([^/]++)(?|(*:1830)|/(?|jabatan(?|(*:1853)|/([^/]++)(*:1871))|keluarga(?|(*:1892)|/([^/]++)(?|(*:1913)|/anak(?|(*:1930)|/([^/]++)(*:1948))))|bahasa(?|(*:1969)|/([^/]++)(*:1987))|p(?|angkat(?|(*:2010)|/([^/]++)(*:2028))|endidikan\\-(?|militer(?|(*:2062)|/([^/]++)(*:2080))|umum(?|(*:2097)|/([^/]++)(*:2115))))|t(?|ugas\\-(?|luar\\-negeri(?|(*:2155)|/([^/]++)(*:2173))|operasi(?|(*:2193)|/([^/]++)(*:2211)))|anda\\-jasa(?|(*:2235)|/([^/]++)(*:2253)))))|material/([^/]++)(*:2283)|satuan/([^/]++)(*:2307))))/?$}sDu',
    ),
    3 => 
    array (
      59 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RGZK0IiY4TDKulQG',
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
            '_route' => 'generated::67yN9sEXdzBL46u0',
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
            '_route' => 'generated::amg6NBIIzPsqGCss',
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
            '_route' => 'generated::4ZAnIoODHHNH209f',
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
            '_route' => 'generated::zn6bUVr9ow1IQbu9',
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
            '_route' => 'generated::giU1Qf0IVJtRBOl5',
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
            '_route' => 'generated::97RWcH0zKyNR0Tze',
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
            '_route' => 'generated::TEbwQJPb8cx3x1Ux',
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
            '_route' => 'generated::u4ikJqml5Gh8goTg',
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
            '_route' => 'generated::jAAA5RfJnYsPu9Ri',
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
            '_route' => 'generated::sxp34T4O2IrjvscE',
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
            '_route' => 'generated::1bkEtg3pAIfK4efH',
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
            '_route' => 'generated::jAcBazfcjrOkS7oz',
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
            '_route' => 'generated::lNrvmGpe0evUS2RZ',
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
            '_route' => 'generated::Nfk3YtCAkeXeraez',
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
            '_route' => 'generated::hvuBNzDpZu4boUSH',
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
            '_route' => 'generated::cdClL07JNedbnlO5',
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
            '_route' => 'generated::Eo4C9Ljq9Rx9dLrf',
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
            '_route' => 'generated::R5gxvphWQhtluKVN',
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
            '_route' => 'generated::goV4vux1soNZKMKc',
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
            '_route' => 'generated::3ehuTyV6u7WvtQZM',
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
            '_route' => 'generated::Jm0myqPki6nDBKmD',
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
            '_route' => 'generated::KS0p6XJ07Qa8mC68',
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
            '_route' => 'generated::BBwMdGSrhqX0xacV',
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
            '_route' => 'generated::vJ8xeRcbsMjWuZfL',
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
            '_route' => 'generated::WrZeiGSbfwixifbO',
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
            '_route' => 'generated::eThQFhCMk6ShCOUi',
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
            '_route' => 'generated::KNiJSvqQ8tTs3J5t',
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
            '_route' => 'generated::1R8rGmpFjRLnt3CV',
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
            '_route' => 'generated::M0SSSt8QPoirzJmp',
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
            '_route' => 'generated::FixwFcNIdig4sSGe',
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
            '_route' => 'generated::ksfXFHkwUgHXVS00',
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
            '_route' => 'generated::4HXi7Bve8D4DVbmt',
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
            '_route' => 'generated::NI8Y8B176710Ndlc',
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
            '_route' => 'generated::oH7wf0IAB1eGHl7I',
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
            '_route' => 'generated::6XRPnpPEtXGZxCyR',
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
            '_route' => 'generated::kpLbPDTUSFFVv0s6',
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
            '_route' => 'generated::ByKGfEDknXYTr23t',
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
            '_route' => 'generated::52LRipfDK8llaB3Q',
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
            '_route' => 'generated::38qD5UuJE00D7Cda',
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
            '_route' => 'generated::LiEYzcunpFXPZFFs',
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
            '_route' => 'generated::PlHQtaGFW6Zsh9vU',
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
            '_route' => 'generated::aLUMlLufVMCFomLP',
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
            '_route' => 'generated::cEIHziYqujClWgXH',
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
            '_route' => 'generated::S46uwwbEdkP40RUt',
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
            '_route' => 'generated::sTVzlSGKTsMBUx3F',
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
            '_route' => 'generated::qxT0QhEFG1uVnYoU',
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
            '_route' => 'generated::u3qrrCcrORmHnvgG',
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
            '_route' => 'generated::iDyWfooGCUw0L0Mw',
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
            '_route' => 'generated::qgppwnsF0TClhuIR',
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
            '_route' => 'generated::xyPwfryW4iqUdrQQ',
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
            '_route' => 'generated::EgQZCJ6ayF9im66s',
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
            '_route' => 'generated::NH8YY6CG8NNGiNbP',
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
            '_route' => 'generated::BfBgMJxabH4qFhAG',
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
            '_route' => 'generated::48bFViMP28XJOYCa',
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
            '_route' => 'generated::3EHAR2CkXtmMy5Pu',
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
            '_route' => 'generated::6BKT2Hw1hFgFMxnn',
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
            '_route' => 'generated::iAy85n1blWxAuaBC',
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
            '_route' => 'generated::W94rEEMUPNIl5z5g',
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
            '_route' => 'generated::4U5NhcAZSqrRmuvm',
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
            '_route' => 'generated::KTUEybW1jL6Fc4mG',
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
            '_route' => 'generated::neu5WRGTtpYB7rrl',
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
            '_route' => 'generated::zx6bdDo7pGomKmnB',
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
            '_route' => 'generated::YjT5BlbnENfuP86c',
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
            '_route' => 'generated::9d3afC9KALd0T0J8',
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
            '_route' => 'generated::DJJltyKUvwqTo5p6',
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
            '_route' => 'generated::R4MuOONVlfvRgN8s',
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
            '_route' => 'generated::YnuAzVUq06KOmDtN',
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
            '_route' => 'generated::rYI9ACtfd9TB8k9L',
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
            '_route' => 'generated::noabwdATTLcsvdj5',
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
            '_route' => 'generated::Ejk5XKYmbE9C882Q',
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
            '_route' => 'generated::CFB1H9VXiNGU1TBS',
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
            '_route' => 'generated::uZ1w1PXvrMPhETdj',
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
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RCULSWgmhTAOzp7V',
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
            '_route' => 'generated::PZNwcpSuwFTS6IMI',
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
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gkliK8pmbC2VF8dr',
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
            '_route' => 'generated::tuiBsHQq1XdJAWlv',
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
      949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OtUDEcnN69eJXepY',
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
            '_route' => 'generated::0SORW6AywePOo1CT',
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
            '_route' => 'generated::QSdRfZ6q6XzkSO5t',
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
      983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TpsGb2sit9UbAQ7T',
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
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ygo17OSXjVtrIQLA',
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
            '_route' => 'generated::TXmfDTMkrQMSSEXw',
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
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4gdekUqfpeiMsxus',
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
            '_route' => 'generated::ZC9K7RHtZbjgjEBt',
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
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qc5n75xdtuvm2QoA',
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
      1116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MCyR41XNOPsTXuIJ',
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
            '_route' => 'generated::87kwa6LFKXxq7CkT',
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
      1145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2oyQWuXUAKOPkahx',
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
            '_route' => 'generated::d3BsgCTpvugbmkwd',
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
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OTMaExMDPRTJ6j8o',
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
            '_route' => 'generated::z5AjQIAVAYG8kNjh',
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
            '_route' => 'generated::jVRrR5PLEZiuhVut',
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
            '_route' => 'generated::9ELIvNkBlhcfqHvq',
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
            '_route' => 'generated::IlX2kBIk2QZ3weVo',
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
            '_route' => 'generated::zvAJPK4MreyYFLQe',
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
      1238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IIKMAhCYPcwZ4REW',
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
            '_route' => 'generated::Rwiqv77FyOXAlLkA',
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
            '_route' => 'generated::wKMdV5qfldts2UkW',
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
      1276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U0DbeTx5s62mPt6s',
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
            '_route' => 'generated::ye1qsXe0j4ddgNwC',
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
            '_route' => 'generated::W5B1zyN6eIKdZ69Y',
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
      1308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sz1wWGeczQBfJF1L',
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
            '_route' => 'generated::TAVlaqVQetzPfeM8',
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
            '_route' => 'generated::PBNTbBIC5g5DTJzL',
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
      1344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H5NBaKnBexhBTzRT',
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
            '_route' => 'generated::jPnE2Jq28WN7oWPB',
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
      1373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKbRb2ApdZAANL8S',
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
            '_route' => 'generated::sKgdRl6Nlwn4gexX',
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
      1406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ogkcb79Wr4g4mkw4',
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
            '_route' => 'generated::Jfn9ba2xrzlabdkD',
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
            '_route' => 'generated::PhCsp0EysXxEIEJT',
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
            '_route' => 'generated::ImY1tiKUFJPdqUZ1',
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
            '_route' => 'generated::4XXqvlmeuojysbZd',
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
            '_route' => 'generated::PIjVo4AWm2WHdV7P',
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
      1496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ksV1pQievrDKPttP',
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
            '_route' => 'generated::lJFgViVixl15t7DA',
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
            '_route' => 'generated::V1OA0q1D7NMYM3aa',
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
      1554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4BHehjKGht3xFwqm',
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
            '_route' => 'generated::luEzi6MVlSC5JQmM',
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
            '_route' => 'generated::vLKMWYbl4bllWZxh',
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
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ytel1B6BEL3Mtcl5',
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
            '_route' => 'generated::aXf1KgqGV2Uq5fG8',
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
            '_route' => 'generated::WFh8IgP0QvB94UMF',
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
      1627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5BX83h1YZTDG2dGS',
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
            '_route' => 'generated::epJRaewWxrupXFPK',
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
            '_route' => 'generated::ewNsUMJ8F96Uuvw9',
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
      1654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sSxoU6h6f6cgmC6l',
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
            '_route' => 'generated::D5BXm6leTuaRLIqj',
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
            '_route' => 'generated::Oy9xQCvcy682mGye',
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
      1682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dSzLmgAdbjaIzBvu',
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
            '_route' => 'generated::e5QBTwqPmJRupch2',
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
            '_route' => 'generated::MKWUthe8GfSNWN9R',
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
      1703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgkl8GLuR6RdjamY',
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
            '_route' => 'generated::VXIC8Mszz50Pn4v2',
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
            '_route' => 'generated::TEaj7fpkEy2L8xMk',
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
      1734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SwBU0hd3g2xsc4nc',
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
            '_route' => 'generated::pk7EOMnnMh8wxYfr',
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
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l3VG2wzTsdMdElF8',
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
            '_route' => 'generated::ToSvf2BERJR9yD83',
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
            '_route' => 'generated::Yr8EWBXXzp4tF8pi',
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
      1787 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2dxnigUNmlWnPI2r',
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
            '_route' => 'generated::q1y2jlC907CJIll8',
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
            '_route' => 'generated::jfA9G0wbqJszs5mr',
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
      1830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::745K9yMvxc6fBUaD',
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
      1853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nqlieYUqvXLVDlhG',
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
      1871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6d3qCyk4DTmJl7kV',
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
      1892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R3K70IqfMvtucQlG',
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
      1913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3kGGTtnKZr2yTMM7',
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
      1930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QwqpItbiOOxOVxpL',
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
      1948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DCymGQsDMlq5Kw2N',
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
      1969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nTwiQOVyzH7theET',
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
      1987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CMQzhKQ2LT8vOfSe',
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
      2010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NAIL4qWmf0La7pYA',
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
      2028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vqztT2j5RmWqsF4X',
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
      2062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FDzMxSNhnUUgCnR6',
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
      2080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8taE9LxO7lwPDuAb',
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
      2097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uDF5DgO7boxqYQr6',
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
      2115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KrWJPx8EZOz4KPNA',
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
      2155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W2IKjCgTWnpLBuRh',
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
      2173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ph3linLCW2XHhU3',
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
      2193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o9GSiMZANiYHkgJ5',
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
      2211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sRKHBlKXaiIWbW7I',
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
      2235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oKUvFlN0Lhl9JtjG',
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
      2253 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UCA2UmZkp0BnLNhF',
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
      2283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ay2WmrxU6hGUU8u7',
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
      2307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FJxdks4NH9RKgIN6',
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
    'generated::D6Mz7zxNGQUToVyo' => 
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
        'as' => 'generated::D6Mz7zxNGQUToVyo',
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
    'generated::1yyf2vyIZZsvbRrH' => 
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
        'as' => 'generated::1yyf2vyIZZsvbRrH',
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
    'generated::050aFWsYa260PG6K' => 
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
        'as' => 'generated::050aFWsYa260PG6K',
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
    'generated::bBiOJtDoGk8kumT9' => 
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
        'as' => 'generated::bBiOJtDoGk8kumT9',
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
    'generated::VhuT7mf4NX94ZvyT' => 
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
        'as' => 'generated::VhuT7mf4NX94ZvyT',
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
    'generated::RGZK0IiY4TDKulQG' => 
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
        'as' => 'generated::RGZK0IiY4TDKulQG',
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
    'generated::67yN9sEXdzBL46u0' => 
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
        'as' => 'generated::67yN9sEXdzBL46u0',
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
    'generated::YjT5BlbnENfuP86c' => 
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
        'as' => 'generated::YjT5BlbnENfuP86c',
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
    'generated::F2VpB2dfkysSVHOd' => 
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
        'as' => 'generated::F2VpB2dfkysSVHOd',
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
    'generated::amg6NBIIzPsqGCss' => 
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
        'as' => 'generated::amg6NBIIzPsqGCss',
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
    'generated::mezupnlaWYaHkwGb' => 
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
        'as' => 'generated::mezupnlaWYaHkwGb',
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
    'generated::UISvgiicc39r2pdd' => 
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
        'as' => 'generated::UISvgiicc39r2pdd',
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
    'generated::II6U0yfhrmjhJlac' => 
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
        'as' => 'generated::II6U0yfhrmjhJlac',
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
    'generated::WWC1c6mQgkHK7W0E' => 
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
        'as' => 'generated::WWC1c6mQgkHK7W0E',
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
    'generated::efVG5Tnlfu1gcMz0' => 
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
        'as' => 'generated::efVG5Tnlfu1gcMz0',
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
    'generated::BTUAbunlONZcbX0S' => 
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
        'as' => 'generated::BTUAbunlONZcbX0S',
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
    'generated::cWGAi1IRjVkYrMVF' => 
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
        'as' => 'generated::cWGAi1IRjVkYrMVF',
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
    'generated::1LprK6ql0d3N7iKh' => 
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
        'as' => 'generated::1LprK6ql0d3N7iKh',
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
    'generated::MAqMXYVgbqho1JYu' => 
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
        'as' => 'generated::MAqMXYVgbqho1JYu',
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
    'generated::9d3afC9KALd0T0J8' => 
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
        'as' => 'generated::9d3afC9KALd0T0J8',
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
    'generated::gEBoNrLViYe12NFo' => 
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
        'as' => 'generated::gEBoNrLViYe12NFo',
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
    'generated::oFad1DNYG4rMvgCT' => 
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
        'as' => 'generated::oFad1DNYG4rMvgCT',
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
    'generated::4ZAnIoODHHNH209f' => 
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
        'as' => 'generated::4ZAnIoODHHNH209f',
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
    'generated::zn6bUVr9ow1IQbu9' => 
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
        'as' => 'generated::zn6bUVr9ow1IQbu9',
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
    'generated::TEbwQJPb8cx3x1Ux' => 
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
        'as' => 'generated::TEbwQJPb8cx3x1Ux',
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
    'generated::giU1Qf0IVJtRBOl5' => 
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
        'as' => 'generated::giU1Qf0IVJtRBOl5',
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
    'generated::97RWcH0zKyNR0Tze' => 
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
        'as' => 'generated::97RWcH0zKyNR0Tze',
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
    'generated::u4ikJqml5Gh8goTg' => 
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
        'as' => 'generated::u4ikJqml5Gh8goTg',
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
    'generated::jAAA5RfJnYsPu9Ri' => 
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
        'as' => 'generated::jAAA5RfJnYsPu9Ri',
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
    'generated::jAcBazfcjrOkS7oz' => 
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
        'as' => 'generated::jAcBazfcjrOkS7oz',
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
    'generated::sxp34T4O2IrjvscE' => 
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
        'as' => 'generated::sxp34T4O2IrjvscE',
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
    'generated::1bkEtg3pAIfK4efH' => 
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
        'as' => 'generated::1bkEtg3pAIfK4efH',
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
    'generated::lNrvmGpe0evUS2RZ' => 
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
        'as' => 'generated::lNrvmGpe0evUS2RZ',
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
    'generated::Nfk3YtCAkeXeraez' => 
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
        'as' => 'generated::Nfk3YtCAkeXeraez',
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
    'generated::KS0p6XJ07Qa8mC68' => 
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
        'as' => 'generated::KS0p6XJ07Qa8mC68',
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
    'generated::hvuBNzDpZu4boUSH' => 
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
        'as' => 'generated::hvuBNzDpZu4boUSH',
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
    'generated::cdClL07JNedbnlO5' => 
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
        'as' => 'generated::cdClL07JNedbnlO5',
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
    'generated::Eo4C9Ljq9Rx9dLrf' => 
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
        'as' => 'generated::Eo4C9Ljq9Rx9dLrf',
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
    'generated::R5gxvphWQhtluKVN' => 
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
        'as' => 'generated::R5gxvphWQhtluKVN',
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
    'generated::Jm0myqPki6nDBKmD' => 
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
        'as' => 'generated::Jm0myqPki6nDBKmD',
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
    'generated::goV4vux1soNZKMKc' => 
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
        'as' => 'generated::goV4vux1soNZKMKc',
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
    'generated::3ehuTyV6u7WvtQZM' => 
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
        'as' => 'generated::3ehuTyV6u7WvtQZM',
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
    'generated::BBwMdGSrhqX0xacV' => 
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
        'as' => 'generated::BBwMdGSrhqX0xacV',
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
    'generated::vJ8xeRcbsMjWuZfL' => 
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
        'as' => 'generated::vJ8xeRcbsMjWuZfL',
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
    'generated::KNiJSvqQ8tTs3J5t' => 
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
        'as' => 'generated::KNiJSvqQ8tTs3J5t',
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
    'generated::WrZeiGSbfwixifbO' => 
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
        'as' => 'generated::WrZeiGSbfwixifbO',
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
    'generated::eThQFhCMk6ShCOUi' => 
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
        'as' => 'generated::eThQFhCMk6ShCOUi',
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
    'generated::1R8rGmpFjRLnt3CV' => 
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
        'as' => 'generated::1R8rGmpFjRLnt3CV',
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
    'generated::M0SSSt8QPoirzJmp' => 
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
        'as' => 'generated::M0SSSt8QPoirzJmp',
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
    'generated::4HXi7Bve8D4DVbmt' => 
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
        'as' => 'generated::4HXi7Bve8D4DVbmt',
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
    'generated::FixwFcNIdig4sSGe' => 
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
        'as' => 'generated::FixwFcNIdig4sSGe',
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
    'generated::ksfXFHkwUgHXVS00' => 
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
        'as' => 'generated::ksfXFHkwUgHXVS00',
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
    'generated::NI8Y8B176710Ndlc' => 
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
        'as' => 'generated::NI8Y8B176710Ndlc',
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
    'generated::oH7wf0IAB1eGHl7I' => 
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
        'as' => 'generated::oH7wf0IAB1eGHl7I',
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
    'generated::ByKGfEDknXYTr23t' => 
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
        'as' => 'generated::ByKGfEDknXYTr23t',
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
    'generated::6XRPnpPEtXGZxCyR' => 
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
        'as' => 'generated::6XRPnpPEtXGZxCyR',
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
    'generated::kpLbPDTUSFFVv0s6' => 
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
        'as' => 'generated::kpLbPDTUSFFVv0s6',
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
    'generated::52LRipfDK8llaB3Q' => 
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
        'as' => 'generated::52LRipfDK8llaB3Q',
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
    'generated::38qD5UuJE00D7Cda' => 
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
        'as' => 'generated::38qD5UuJE00D7Cda',
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
    'generated::aLUMlLufVMCFomLP' => 
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
        'as' => 'generated::aLUMlLufVMCFomLP',
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
    'generated::LiEYzcunpFXPZFFs' => 
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
        'as' => 'generated::LiEYzcunpFXPZFFs',
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
    'generated::PlHQtaGFW6Zsh9vU' => 
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
        'as' => 'generated::PlHQtaGFW6Zsh9vU',
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
    'generated::iDyWfooGCUw0L0Mw' => 
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
        'as' => 'generated::iDyWfooGCUw0L0Mw',
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
    'generated::qgppwnsF0TClhuIR' => 
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
        'as' => 'generated::qgppwnsF0TClhuIR',
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
    'generated::NH8YY6CG8NNGiNbP' => 
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
        'as' => 'generated::NH8YY6CG8NNGiNbP',
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
    'generated::xyPwfryW4iqUdrQQ' => 
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
        'as' => 'generated::xyPwfryW4iqUdrQQ',
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
    'generated::EgQZCJ6ayF9im66s' => 
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
        'as' => 'generated::EgQZCJ6ayF9im66s',
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
    'generated::BfBgMJxabH4qFhAG' => 
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
        'as' => 'generated::BfBgMJxabH4qFhAG',
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
    'generated::48bFViMP28XJOYCa' => 
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
        'as' => 'generated::48bFViMP28XJOYCa',
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
    'generated::iAy85n1blWxAuaBC' => 
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
        'as' => 'generated::iAy85n1blWxAuaBC',
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
    'generated::3EHAR2CkXtmMy5Pu' => 
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
        'as' => 'generated::3EHAR2CkXtmMy5Pu',
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
    'generated::6BKT2Hw1hFgFMxnn' => 
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
        'as' => 'generated::6BKT2Hw1hFgFMxnn',
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
    'generated::W94rEEMUPNIl5z5g' => 
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
        'as' => 'generated::W94rEEMUPNIl5z5g',
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
    'generated::4U5NhcAZSqrRmuvm' => 
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
        'as' => 'generated::4U5NhcAZSqrRmuvm',
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
    'generated::zx6bdDo7pGomKmnB' => 
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
        'as' => 'generated::zx6bdDo7pGomKmnB',
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
    'generated::KTUEybW1jL6Fc4mG' => 
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
        'as' => 'generated::KTUEybW1jL6Fc4mG',
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
    'generated::neu5WRGTtpYB7rrl' => 
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
        'as' => 'generated::neu5WRGTtpYB7rrl',
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
    'generated::cEIHziYqujClWgXH' => 
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
        'as' => 'generated::cEIHziYqujClWgXH',
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
    'generated::S46uwwbEdkP40RUt' => 
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
        'as' => 'generated::S46uwwbEdkP40RUt',
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
    'generated::u3qrrCcrORmHnvgG' => 
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
        'as' => 'generated::u3qrrCcrORmHnvgG',
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
    'generated::sTVzlSGKTsMBUx3F' => 
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
        'as' => 'generated::sTVzlSGKTsMBUx3F',
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
    'generated::qxT0QhEFG1uVnYoU' => 
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
        'as' => 'generated::qxT0QhEFG1uVnYoU',
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
    'generated::XktCMPqakMhpBMwM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/kompers-satjar/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarCategorysController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarCategorysController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XktCMPqakMhpBMwM',
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
    'generated::u4Agw2neJsOjf8WC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/kompers-satjar/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarCategorysController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarCategorysController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u4Agw2neJsOjf8WC',
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
    'generated::ghfiPVPw49Y3k6C4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/kompers-satjar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ghfiPVPw49Y3k6C4',
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
    'generated::FnXcsXb8DIdpDhSY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/kompers-satjar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FnXcsXb8DIdpDhSY',
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
    'generated::RCULSWgmhTAOzp7V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/kompers-satjar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RCULSWgmhTAOzp7V',
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
    'generated::PZNwcpSuwFTS6IMI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/kompers-satjar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\KompersSatjarController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PZNwcpSuwFTS6IMI',
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
    'generated::XWqvngO5RQAka5hx' => 
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
        'as' => 'generated::XWqvngO5RQAka5hx',
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
    'generated::GaeSzWuLavDjXWhX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/peta-jabatan/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@summary',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\PetaJabatanController@summary',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GaeSzWuLavDjXWhX',
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
    'generated::rYI9ACtfd9TB8k9L' => 
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
        'as' => 'generated::rYI9ACtfd9TB8k9L',
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
    'generated::NlqrmtVv20lXD9du' => 
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
        'as' => 'generated::NlqrmtVv20lXD9du',
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
    'generated::noabwdATTLcsvdj5' => 
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
        'as' => 'generated::noabwdATTLcsvdj5',
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
    'generated::Ejk5XKYmbE9C882Q' => 
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
        'as' => 'generated::Ejk5XKYmbE9C882Q',
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
    'generated::dV5zw9pVmMg04SsF' => 
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
        'as' => 'generated::dV5zw9pVmMg04SsF',
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
    'generated::OtUDEcnN69eJXepY' => 
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
        'as' => 'generated::OtUDEcnN69eJXepY',
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
    'generated::0SORW6AywePOo1CT' => 
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
        'as' => 'generated::0SORW6AywePOo1CT',
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
    'generated::TpsGb2sit9UbAQ7T' => 
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
        'as' => 'generated::TpsGb2sit9UbAQ7T',
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
    'generated::JBUVssrjccqvVyTF' => 
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
        'as' => 'generated::JBUVssrjccqvVyTF',
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
    'generated::QSdRfZ6q6XzkSO5t' => 
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
        'as' => 'generated::QSdRfZ6q6XzkSO5t',
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
    'generated::wsztewklSfoUi2Y8' => 
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
        'as' => 'generated::wsztewklSfoUi2Y8',
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
    'generated::bYqG8HzRMRj0Nyvs' => 
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
        'as' => 'generated::bYqG8HzRMRj0Nyvs',
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
    'generated::Qc5n75xdtuvm2QoA' => 
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
        'as' => 'generated::Qc5n75xdtuvm2QoA',
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
    'generated::pLpmoqQsXpchglNd' => 
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
        'as' => 'generated::pLpmoqQsXpchglNd',
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
    'generated::aFhtsqcCk7ChKM6T' => 
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
        'as' => 'generated::aFhtsqcCk7ChKM6T',
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
    'generated::MCyR41XNOPsTXuIJ' => 
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
        'as' => 'generated::MCyR41XNOPsTXuIJ',
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
    'generated::87kwa6LFKXxq7CkT' => 
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
        'as' => 'generated::87kwa6LFKXxq7CkT',
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
    'generated::TjxrO8Rfwn37J3hw' => 
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
        'as' => 'generated::TjxrO8Rfwn37J3hw',
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
    'generated::pMsiaBk8IZHbgvOi' => 
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
        'as' => 'generated::pMsiaBk8IZHbgvOi',
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
    'generated::2oyQWuXUAKOPkahx' => 
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
        'as' => 'generated::2oyQWuXUAKOPkahx',
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
    'generated::d3BsgCTpvugbmkwd' => 
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
        'as' => 'generated::d3BsgCTpvugbmkwd',
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
    'generated::ZqcMxxqA6DUj2fld' => 
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
        'as' => 'generated::ZqcMxxqA6DUj2fld',
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
    'generated::OTMaExMDPRTJ6j8o' => 
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
        'as' => 'generated::OTMaExMDPRTJ6j8o',
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
    'generated::Rlmww4m3KC4oSHIz' => 
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
        'as' => 'generated::Rlmww4m3KC4oSHIz',
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
    'generated::z5AjQIAVAYG8kNjh' => 
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
        'as' => 'generated::z5AjQIAVAYG8kNjh',
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
    'generated::jVRrR5PLEZiuhVut' => 
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
        'as' => 'generated::jVRrR5PLEZiuhVut',
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
    'generated::ZX6nVjDLAIwuJWzm' => 
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
        'as' => 'generated::ZX6nVjDLAIwuJWzm',
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
    'generated::kC3UfCT7ObO4DmIL' => 
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
        'as' => 'generated::kC3UfCT7ObO4DmIL',
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
    'generated::H5NBaKnBexhBTzRT' => 
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
        'as' => 'generated::H5NBaKnBexhBTzRT',
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
    'generated::jPnE2Jq28WN7oWPB' => 
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
        'as' => 'generated::jPnE2Jq28WN7oWPB',
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
    'generated::JNyTdgGiPvp5MRjF' => 
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
        'as' => 'generated::JNyTdgGiPvp5MRjF',
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
    'generated::Kf3gVYIBOwKd3pcw' => 
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
        'as' => 'generated::Kf3gVYIBOwKd3pcw',
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
    'generated::NKbRb2ApdZAANL8S' => 
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
        'as' => 'generated::NKbRb2ApdZAANL8S',
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
    'generated::sKgdRl6Nlwn4gexX' => 
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
        'as' => 'generated::sKgdRl6Nlwn4gexX',
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
    'generated::OLZ0MdxN8zKSXUg1' => 
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
        'as' => 'generated::OLZ0MdxN8zKSXUg1',
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
    'generated::BQ7W4cdzp1RPciMw' => 
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
        'as' => 'generated::BQ7W4cdzp1RPciMw',
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
    'generated::CFB1H9VXiNGU1TBS' => 
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
        'as' => 'generated::CFB1H9VXiNGU1TBS',
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
    'generated::uZ1w1PXvrMPhETdj' => 
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
        'as' => 'generated::uZ1w1PXvrMPhETdj',
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
    'generated::opbW8c3HlltEVBwJ' => 
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
        'as' => 'generated::opbW8c3HlltEVBwJ',
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
    'generated::9lvRLWeM4qLZHuEw' => 
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
        'as' => 'generated::9lvRLWeM4qLZHuEw',
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
    'generated::gkliK8pmbC2VF8dr' => 
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
        'as' => 'generated::gkliK8pmbC2VF8dr',
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
    'generated::tuiBsHQq1XdJAWlv' => 
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
        'as' => 'generated::tuiBsHQq1XdJAWlv',
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
    'generated::KOkRuESyl3J2Libd' => 
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
        'as' => 'generated::KOkRuESyl3J2Libd',
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
    'generated::9ELIvNkBlhcfqHvq' => 
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
        'as' => 'generated::9ELIvNkBlhcfqHvq',
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
    'generated::CRSGBTIivEb3bQvY' => 
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
        'as' => 'generated::CRSGBTIivEb3bQvY',
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
    'generated::IlX2kBIk2QZ3weVo' => 
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
        'as' => 'generated::IlX2kBIk2QZ3weVo',
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
    'generated::zvAJPK4MreyYFLQe' => 
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
        'as' => 'generated::zvAJPK4MreyYFLQe',
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
    'generated::yBSSQsf6q9gSn6uj' => 
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
        'as' => 'generated::yBSSQsf6q9gSn6uj',
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
    'generated::U0DbeTx5s62mPt6s' => 
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
        'as' => 'generated::U0DbeTx5s62mPt6s',
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
    'generated::e1LGMwshzqDGO245' => 
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
        'as' => 'generated::e1LGMwshzqDGO245',
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
    'generated::ye1qsXe0j4ddgNwC' => 
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
        'as' => 'generated::ye1qsXe0j4ddgNwC',
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
    'generated::W5B1zyN6eIKdZ69Y' => 
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
        'as' => 'generated::W5B1zyN6eIKdZ69Y',
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
    'generated::TjGHAE9lkodDO8hv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-purnawirawan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TjGHAE9lkodDO8hv',
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
    'generated::IIKMAhCYPcwZ4REW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/satuan-purnawirawan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IIKMAhCYPcwZ4REW',
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
    'generated::BrUmZPM9ZM2l8QDm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-purnawirawan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BrUmZPM9ZM2l8QDm',
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
    'generated::Rwiqv77FyOXAlLkA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/satuan-purnawirawan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Rwiqv77FyOXAlLkA',
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
    'generated::wKMdV5qfldts2UkW' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/satuan-purnawirawan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SatuanPurnawirawanController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wKMdV5qfldts2UkW',
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
    'generated::RB0hm9okQ7tZIjqA' => 
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
        'as' => 'generated::RB0hm9okQ7tZIjqA',
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
    'generated::Sz1wWGeczQBfJF1L' => 
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
        'as' => 'generated::Sz1wWGeczQBfJF1L',
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
    'generated::sGNYDNuXCxkfvT9a' => 
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
        'as' => 'generated::sGNYDNuXCxkfvT9a',
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
    'generated::TAVlaqVQetzPfeM8' => 
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
        'as' => 'generated::TAVlaqVQetzPfeM8',
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
    'generated::PBNTbBIC5g5DTJzL' => 
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
        'as' => 'generated::PBNTbBIC5g5DTJzL',
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
    'generated::uZxaMpnDPoUUjpq6' => 
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
        'as' => 'generated::uZxaMpnDPoUUjpq6',
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
    'generated::ogkcb79Wr4g4mkw4' => 
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
        'as' => 'generated::ogkcb79Wr4g4mkw4',
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
    'generated::Jfn9ba2xrzlabdkD' => 
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
        'as' => 'generated::Jfn9ba2xrzlabdkD',
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
    'generated::BtCKyYp6FmtGqJTO' => 
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
        'as' => 'generated::BtCKyYp6FmtGqJTO',
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
    'generated::PhCsp0EysXxEIEJT' => 
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
        'as' => 'generated::PhCsp0EysXxEIEJT',
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
    'generated::ahadKJZLyM8a4TSg' => 
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
        'as' => 'generated::ahadKJZLyM8a4TSg',
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
    'generated::IzTM2FjHsiRfQ8g7' => 
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
        'as' => 'generated::IzTM2FjHsiRfQ8g7',
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
    'generated::3fwydUl0C3Q8ZZPF' => 
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
        'as' => 'generated::3fwydUl0C3Q8ZZPF',
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
    'generated::vPYtAyeEfmUjfXHq' => 
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
        'as' => 'generated::vPYtAyeEfmUjfXHq',
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
    'generated::ImY1tiKUFJPdqUZ1' => 
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
        'as' => 'generated::ImY1tiKUFJPdqUZ1',
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
    'generated::4XXqvlmeuojysbZd' => 
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
        'as' => 'generated::4XXqvlmeuojysbZd',
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
    'generated::xpg3YeMGs4VBvkVx' => 
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
        'as' => 'generated::xpg3YeMGs4VBvkVx',
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
    'generated::PIjVo4AWm2WHdV7P' => 
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
        'as' => 'generated::PIjVo4AWm2WHdV7P',
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
    'generated::q9exrK6t2gG3aEhy' => 
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
        'as' => 'generated::q9exrK6t2gG3aEhy',
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
    'generated::ksV1pQievrDKPttP' => 
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
        'as' => 'generated::ksV1pQievrDKPttP',
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
    'generated::lJFgViVixl15t7DA' => 
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
        'as' => 'generated::lJFgViVixl15t7DA',
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
    'generated::xOLZUYdPTSA4926W' => 
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
        'as' => 'generated::xOLZUYdPTSA4926W',
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
    'generated::V1OA0q1D7NMYM3aa' => 
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
        'as' => 'generated::V1OA0q1D7NMYM3aa',
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
    'generated::8KA9OZ2taNDcsQav' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/laplakgiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8KA9OZ2taNDcsQav',
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
    'generated::4BHehjKGht3xFwqm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/laplakgiat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4BHehjKGht3xFwqm',
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
    'generated::luEzi6MVlSC5JQmM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/laplakgiat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::luEzi6MVlSC5JQmM',
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
    'generated::ebFKHk21DvUBTM8t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/laplakgiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ebFKHk21DvUBTM8t',
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
    'generated::vLKMWYbl4bllWZxh' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/laplakgiat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatLaplakgiatController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vLKMWYbl4bllWZxh',
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
    'generated::AASFTDkdoT4ps94r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/renlakgiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AASFTDkdoT4ps94r',
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
    'generated::Ytel1B6BEL3Mtcl5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/renlakgiat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ytel1B6BEL3Mtcl5',
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
    'generated::aXf1KgqGV2Uq5fG8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/renlakgiat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aXf1KgqGV2Uq5fG8',
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
    'generated::n0lp4S0T5D2jhM62' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/renlakgiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n0lp4S0T5D2jhM62',
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
    'generated::WFh8IgP0QvB94UMF' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/binsiapsat/binsat/renlakgiat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatBinsatRenlakgiatController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WFh8IgP0QvB94UMF',
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
    'generated::PEphxlqQX0ksUf7u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/lampiran',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PEphxlqQX0ksUf7u',
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
    'generated::5BX83h1YZTDG2dGS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/lampiran/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5BX83h1YZTDG2dGS',
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
    'generated::epJRaewWxrupXFPK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/lampiran/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::epJRaewWxrupXFPK',
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
    'generated::0TmUUCo2p6itSrtM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/lampiran',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0TmUUCo2p6itSrtM',
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
    'generated::ewNsUMJ8F96Uuvw9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/lampiran/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatLampiranController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ewNsUMJ8F96Uuvw9',
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
    'generated::MxONXteBdQfQlpH6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/induk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MxONXteBdQfQlpH6',
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
    'generated::sSxoU6h6f6cgmC6l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/induk/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sSxoU6h6f6cgmC6l',
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
    'generated::D5BXm6leTuaRLIqj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/induk/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::D5BXm6leTuaRLIqj',
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
    'generated::RLtTEhSVs2L4Giv2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/induk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RLtTEhSVs2L4Giv2',
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
    'generated::Oy9xQCvcy682mGye' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/binsiapsat/lapsat/induk/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatLapsatIndukController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Oy9xQCvcy682mGye',
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
    'generated::v7ROxNpapCesACKG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/induk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v7ROxNpapCesACKG',
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
    'generated::dSzLmgAdbjaIzBvu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/binsiapsat/induk/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dSzLmgAdbjaIzBvu',
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
    'generated::e5QBTwqPmJRupch2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/induk/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::e5QBTwqPmJRupch2',
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
    'generated::iFYv88kTzGFeCj4k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/binsiapsat/induk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iFYv88kTzGFeCj4k',
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
    'generated::MKWUthe8GfSNWN9R' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/binsiapsat/induk/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\BinsiapsatIndukController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MKWUthe8GfSNWN9R',
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
    'generated::FSYWiH3DEyfVYCou' => 
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
        'as' => 'generated::FSYWiH3DEyfVYCou',
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
    'generated::kgkl8GLuR6RdjamY' => 
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
        'as' => 'generated::kgkl8GLuR6RdjamY',
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
    'generated::VXIC8Mszz50Pn4v2' => 
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
        'as' => 'generated::VXIC8Mszz50Pn4v2',
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
    'generated::jyDGy8M4vj5p25zC' => 
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
        'as' => 'generated::jyDGy8M4vj5p25zC',
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
    'generated::TEaj7fpkEy2L8xMk' => 
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
        'as' => 'generated::TEaj7fpkEy2L8xMk',
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
    'generated::vYWT81swSWwTbamp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/learning',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vYWT81swSWwTbamp',
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
    'generated::1UVf9o0ypGEMEupu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/learning',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1UVf9o0ypGEMEupu',
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
    'generated::SwBU0hd3g2xsc4nc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/learning/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SwBU0hd3g2xsc4nc',
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
    'generated::pk7EOMnnMh8wxYfr' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/learning/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\LearningController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pk7EOMnnMh8wxYfr',
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
    'generated::aidsBWltKZ8p04lM' => 
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
        'as' => 'generated::aidsBWltKZ8p04lM',
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
    'generated::7EQye0jGmIM6vNL2' => 
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
        'as' => 'generated::7EQye0jGmIM6vNL2',
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
    'generated::OceDMHveziKUKLYK' => 
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
        'as' => 'generated::OceDMHveziKUKLYK',
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
    'generated::0Wt9HyKXDfuRbHxQ' => 
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
        'as' => 'generated::0Wt9HyKXDfuRbHxQ',
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
    'generated::l3VG2wzTsdMdElF8' => 
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
        'as' => 'generated::l3VG2wzTsdMdElF8',
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
    'generated::ToSvf2BERJR9yD83' => 
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
        'as' => 'generated::ToSvf2BERJR9yD83',
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
    'generated::fT13DykCXjR9qv6P' => 
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
        'as' => 'generated::fT13DykCXjR9qv6P',
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
    'generated::Yr8EWBXXzp4tF8pi' => 
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
        'as' => 'generated::Yr8EWBXXzp4tF8pi',
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
    'generated::L0h3XRBVhWufO4jX' => 
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
        'as' => 'generated::L0h3XRBVhWufO4jX',
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
    'generated::DJJltyKUvwqTo5p6' => 
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
        'as' => 'generated::DJJltyKUvwqTo5p6',
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
    'generated::R4MuOONVlfvRgN8s' => 
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
        'as' => 'generated::R4MuOONVlfvRgN8s',
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
    'generated::n7vkhPVechx3tibM' => 
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
        'as' => 'generated::n7vkhPVechx3tibM',
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
    'generated::YnuAzVUq06KOmDtN' => 
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
        'as' => 'generated::YnuAzVUq06KOmDtN',
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
    'generated::OGqiIAKThG7Dp1Ly' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/role-permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleHasPermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\RoleHasPermissionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OGqiIAKThG7Dp1Ly',
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
    'generated::lFk507ujKRRL4n0c' => 
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
        'as' => 'generated::lFk507ujKRRL4n0c',
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
    'generated::2dxnigUNmlWnPI2r' => 
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
        'as' => 'generated::2dxnigUNmlWnPI2r',
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
    'generated::q1y2jlC907CJIll8' => 
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
        'as' => 'generated::q1y2jlC907CJIll8',
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
    'generated::mkHGM7PfOwyLjDQo' => 
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
        'as' => 'generated::mkHGM7PfOwyLjDQo',
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
    'generated::jfA9G0wbqJszs5mr' => 
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
        'as' => 'generated::jfA9G0wbqJszs5mr',
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
    'generated::ygo17OSXjVtrIQLA' => 
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
        'as' => 'generated::ygo17OSXjVtrIQLA',
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
    'generated::TXmfDTMkrQMSSEXw' => 
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
        'as' => 'generated::TXmfDTMkrQMSSEXw',
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
    'generated::StbUJgAc5d1KXpAG' => 
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
        'as' => 'generated::StbUJgAc5d1KXpAG',
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
    'generated::4gdekUqfpeiMsxus' => 
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
        'as' => 'generated::4gdekUqfpeiMsxus',
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
    'generated::ZC9K7RHtZbjgjEBt' => 
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
        'as' => 'generated::ZC9K7RHtZbjgjEBt',
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
    'generated::50eSUqL5tVEb6bas' => 
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
        'as' => 'generated::50eSUqL5tVEb6bas',
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
    'generated::kmhTFNkA1APmjevC' => 
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
        'as' => 'generated::kmhTFNkA1APmjevC',
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
    'generated::dP4ph75R6Rnm2pgt' => 
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
        'as' => 'generated::dP4ph75R6Rnm2pgt',
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
    'generated::qj4nQvqHot3o8Hix' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/binsiapsat/binsat/renlakgiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatBinsatRenlakgiatSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatBinsatRenlakgiatSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::qj4nQvqHot3o8Hix',
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
    'generated::Y2Rl9wW6FYXe0bPf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/binsiapsat/binsat/laplakgiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatBinsatLaplakgiatSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatBinsatLaplakgiatSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::Y2Rl9wW6FYXe0bPf',
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
    'generated::WnTRv8PGdpJ3ukYD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/binsiapsat/lapsat/induk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatLapsatIndukSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatLapsatIndukSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::WnTRv8PGdpJ3ukYD',
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
    'generated::iQwWs3VCh1wMVJmE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/searcher/binsiapsat/lapsat/lampiran',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatLapsatLampiranSearcherController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Searcher\\BinsiapsatLapsatLampiranSearcherController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/searcher',
        'where' => 
        array (
        ),
        'as' => 'generated::iQwWs3VCh1wMVJmE',
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
    'generated::MqRmzSlqPfKOtTnL' => 
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
        'as' => 'generated::MqRmzSlqPfKOtTnL',
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
    'generated::745K9yMvxc6fBUaD' => 
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
        'as' => 'generated::745K9yMvxc6fBUaD',
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
    'generated::5sKNYxRSyYWmEqYs' => 
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
        'as' => 'generated::5sKNYxRSyYWmEqYs',
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
    'generated::6L4MfLVLNUOQ2KL5' => 
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
        'as' => 'generated::6L4MfLVLNUOQ2KL5',
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
    'generated::hkf3cOzHP2ps50Pj' => 
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
        'as' => 'generated::hkf3cOzHP2ps50Pj',
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
    'generated::Iq6UAt3OTqz8zYP0' => 
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
        'as' => 'generated::Iq6UAt3OTqz8zYP0',
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
    'generated::8Bdwgx2vBCpmn4FN' => 
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
        'as' => 'generated::8Bdwgx2vBCpmn4FN',
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
    'generated::nqlieYUqvXLVDlhG' => 
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
        'as' => 'generated::nqlieYUqvXLVDlhG',
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
    'generated::6d3qCyk4DTmJl7kV' => 
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
        'as' => 'generated::6d3qCyk4DTmJl7kV',
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
    'generated::R3K70IqfMvtucQlG' => 
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
        'as' => 'generated::R3K70IqfMvtucQlG',
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
    'generated::3kGGTtnKZr2yTMM7' => 
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
        'as' => 'generated::3kGGTtnKZr2yTMM7',
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
    'generated::QwqpItbiOOxOVxpL' => 
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
        'as' => 'generated::QwqpItbiOOxOVxpL',
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
    'generated::DCymGQsDMlq5Kw2N' => 
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
        'as' => 'generated::DCymGQsDMlq5Kw2N',
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
    'generated::nTwiQOVyzH7theET' => 
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
        'as' => 'generated::nTwiQOVyzH7theET',
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
    'generated::CMQzhKQ2LT8vOfSe' => 
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
        'as' => 'generated::CMQzhKQ2LT8vOfSe',
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
    'generated::NAIL4qWmf0La7pYA' => 
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
        'as' => 'generated::NAIL4qWmf0La7pYA',
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
    'generated::vqztT2j5RmWqsF4X' => 
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
        'as' => 'generated::vqztT2j5RmWqsF4X',
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
    'generated::FDzMxSNhnUUgCnR6' => 
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
        'as' => 'generated::FDzMxSNhnUUgCnR6',
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
    'generated::8taE9LxO7lwPDuAb' => 
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
        'as' => 'generated::8taE9LxO7lwPDuAb',
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
    'generated::uDF5DgO7boxqYQr6' => 
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
        'as' => 'generated::uDF5DgO7boxqYQr6',
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
    'generated::KrWJPx8EZOz4KPNA' => 
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
        'as' => 'generated::KrWJPx8EZOz4KPNA',
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
    'generated::W2IKjCgTWnpLBuRh' => 
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
        'as' => 'generated::W2IKjCgTWnpLBuRh',
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
    'generated::2ph3linLCW2XHhU3' => 
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
        'as' => 'generated::2ph3linLCW2XHhU3',
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
    'generated::o9GSiMZANiYHkgJ5' => 
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
        'as' => 'generated::o9GSiMZANiYHkgJ5',
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
    'generated::sRKHBlKXaiIWbW7I' => 
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
        'as' => 'generated::sRKHBlKXaiIWbW7I',
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
    'generated::oKUvFlN0Lhl9JtjG' => 
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
        'as' => 'generated::oKUvFlN0Lhl9JtjG',
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
    'generated::UCA2UmZkp0BnLNhF' => 
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
        'as' => 'generated::UCA2UmZkp0BnLNhF',
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
    'generated::JAF8JbCqLfcuhYTq' => 
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
        'as' => 'generated::JAF8JbCqLfcuhYTq',
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
    'generated::ay2WmrxU6hGUU8u7' => 
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
        'as' => 'generated::ay2WmrxU6hGUU8u7',
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
    'generated::ftP3LgjYmoaEL0CK' => 
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
        'as' => 'generated::ftP3LgjYmoaEL0CK',
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
    'generated::sb8XNFSr1DaoWZsO' => 
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
        'as' => 'generated::sb8XNFSr1DaoWZsO',
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
    'generated::CD9C2NZN9oLCPMVG' => 
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
        'as' => 'generated::CD9C2NZN9oLCPMVG',
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
    'generated::FJxdks4NH9RKgIN6' => 
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
        'as' => 'generated::FJxdks4NH9RKgIN6',
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
    'generated::qCRmxyo0qb8mP9iX' => 
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
        'as' => 'generated::qCRmxyo0qb8mP9iX',
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
