<?php

return [
    'items' => [
        [
            'name' => 'Anasayfa',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path id="dashboard"
                    d="M406-330.667h10.667V-344H406v13.333ZM406-320h10.667v-8H406v8Zm13.333,0H430v-13.333H419.333V-320Zm0-24v8H430v-8Z"
                    transform="translate(-406 344)" fill="#d8d8d8" fill-rule="evenodd" />
                </svg>',
            'url' => '/dashboard',
            'active' => false,
            'user_types' => ['*'],
            'items' => null
        ],
        [
            'name' => 'Siparişler',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="22.525" height="23.631" viewBox="0 0 22.525 23.631">
        <g id="Group_1166" data-name="Group 1166" transform="translate(-9.89 -8.699)">
          <g id="Group_1164" data-name="Group 1164">
            <g id="Group_1163" data-name="Group 1163">
              <g id="order" transform="translate(-25.921 -3.923)">
                <path id="Path_72" data-name="Path 72" d="M47.669,253.437l-1-.527-2.4-1.27q-1.458-.77-2.919-1.542l-2.514-1.327c-.407-.215-.811-.438-1.223-.646l-.017-.009c.2.341.39.681.587,1.022v-9.328c0-.43.007-.861,0-1.291V238.5L36.4,239.523l1,.53,2.4,1.27,2.919,1.542,2.514,1.329c.407.215.811.438,1.223.646l.017.009c-.2-.341-.39-.681-.587-1.022v9.318c0,.43,0,.861,0,1.291v.017a1.231,1.231,0,0,0,.345.837,1.188,1.188,0,0,0,1.674,0,1.227,1.227,0,0,0,.345-.837v-9.318c0-.43,0-.861,0-1.291v-.017a1.182,1.182,0,0,0-.587-1.022l-1-.53-2.4-1.27-2.919-1.542-2.514-1.329c-.407-.215-.814-.435-1.223-.646l-.017-.009a1.208,1.208,0,0,0-1.194,0,1.192,1.192,0,0,0-.587,1.022v9.328c0,.43,0,.861,0,1.291v.017a1.179,1.179,0,0,0,.587,1.022l1,.527,2.4,1.27q1.458.77,2.918,1.542l2.514,1.327c.407.215.814.435,1.223.646l.017.009a1.247,1.247,0,0,0,.911.118,1.209,1.209,0,0,0,.707-.544,1.192,1.192,0,0,0,.118-.911A1.18,1.18,0,0,0,47.669,253.437Z" transform="translate(0 -219.386)" fill="#d8d8d8"/>
                <path id="Path_73" data-name="Path 73" d="M472.577,248.311l-1,.527-2.4,1.27q-1.458.77-2.919,1.542l-2.514,1.327c-.407.215-.818.423-1.223.646l-.017.009,1.779,1.022v-9.318c0-.43.007-.861,0-1.291v-.017c-.2.341-.39.681-.587,1.022l1-.53,2.4-1.27,2.919-1.542,2.514-1.329c.407-.215.818-.426,1.223-.646l.017-.009-1.779-1.022v9.328c0,.43,0,.861,0,1.291v.017a1.231,1.231,0,0,0,.345.837,1.188,1.188,0,0,0,1.674,0,1.227,1.227,0,0,0,.345-.837v-9.328c0-.43,0-.861,0-1.291V238.7a1.2,1.2,0,0,0-.587-1.022,1.208,1.208,0,0,0-1.194,0l-1,.53-2.4,1.27-2.919,1.542-2.514,1.329c-.407.215-.821.423-1.223.646l-.017.009a1.176,1.176,0,0,0-.587,1.022v9.318c0,.43,0,.861,0,1.291v.017a1.2,1.2,0,0,0,.587,1.022,1.214,1.214,0,0,0,1.194,0l1-.527,2.4-1.27q1.458-.77,2.919-1.542l2.514-1.327c.407-.215.821-.423,1.223-.646l.017-.009a1.183,1.183,0,0,0-1.192-2.043Z" transform="translate(-416.022 -219.581)" fill="#d8d8d8"/>
                <path id="Path_74" data-name="Path 74" d="M56.886,18.1l-1,.53-2.4,1.27-2.919,1.542L48.05,22.767c-.407.215-.818.426-1.223.646l-.017.009H48l-1-.53-2.4-1.27-2.919-1.542-2.514-1.329c-.407-.215-.811-.438-1.223-.646L37.93,18.1v2.041l1-.527,2.4-1.27L44.252,16.8q1.256-.663,2.514-1.329c.407-.215.818-.426,1.223-.646L48,14.813H46.811l1,.527,2.4,1.27,2.919,1.542q1.256.663,2.514,1.329c.407.215.814.435,1.223.646l.017.009a1.247,1.247,0,0,0,.911.118,1.209,1.209,0,0,0,.707-.544,1.184,1.184,0,0,0-.426-1.618l-1.015-.535q-1.206-.635-2.41-1.272l-2.93-1.547-2.5-1.324c-.4-.213-.8-.433-1.206-.636a1.253,1.253,0,0,0-.766-.147,1.316,1.316,0,0,0-.454.149c-.045.024-.088.047-.132.069l-.624.329q-1.139.6-2.28,1.2l-2.9,1.535q-1.313.692-2.623,1.386-.717.38-1.433.757l-.066.035a1.19,1.19,0,0,0,0,2.041l1.015.537,2.41,1.275,2.93,1.549,2.5,1.324c.4.213.8.433,1.206.639a1.253,1.253,0,0,0,.766.147,1.316,1.316,0,0,0,.454-.149c.045-.024.088-.047.132-.069l.624-.329,2.28-1.206,2.9-1.535q1.313-.692,2.623-1.386l1.433-.759.066-.035A1.183,1.183,0,0,0,56.886,18.1Z" transform="translate(-0.331)" fill="#d8d8d8"/>
                <path id="Path_75" data-name="Path 75" d="M250.894,132.793l1-.53,2.4-1.27,2.918-1.542,2.514-1.329c.407-.215.821-.423,1.223-.646l.017-.009a1.182,1.182,0,1,0-1.192-2.041l-1,.53-2.4,1.27-2.919,1.542-2.514,1.329c-.407.215-.821.423-1.223.646l-.017.009a1.182,1.182,0,1,0,1.192,2.041Z" transform="translate(-208.262 -109.988)" fill="#d8d8d8"/>
              </g>
            </g>
          </g>
        </g>
      </svg>',
            'url' => '/dashboard/orders',
            'active' => false,
            'items' => null,
            'user_types' => ['*'],
        ],
        [
            'name' => 'Ürünler',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18.703" height="26.719" viewBox="0 0 18.703 26.719">
            <g id="Group_1167" data-name="Group 1167" transform="translate(-11 -8.667)">
                <path id="mobile" d="M15.3,21.091l-.2-.16a1.015,1.015,0,0,0-.24-.12l-.24-.107a1.336,1.336,0,0,0-1.216.361,1.536,1.536,0,0,0-.281.441,1.336,1.336,0,0,0,1.737,1.75,1.95,1.95,0,0,0,.441-.294,1.322,1.322,0,0,0,0-1.87ZM19.7,2H9.008A4.008,4.008,0,0,0,5,6.008v18.7a4.008,4.008,0,0,0,4.008,4.008H19.7A4.008,4.008,0,0,0,23.7,24.711V6.008A4.008,4.008,0,0,0,19.7,2Zm1.336,22.711A1.336,1.336,0,0,1,19.7,26.047H9.008a1.336,1.336,0,0,1-1.336-1.336V6.008A1.336,1.336,0,0,1,9.008,4.672H19.7a1.336,1.336,0,0,1,1.336,1.336Z" transform="translate(6 6.667)" fill="#d8d8d8"/>
            </g>
        </svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['admin'],
            'items' => [
                [
                    'title' => 'Ürün Yönetimi',
                    'url' => '/dashboard/products'
                ],
                [
                    'title' => 'Marka Yönetimi',
                    'url' => '/dashboard/brands'
                ],
                [
                    'title' => 'Kategori Yönetimi',
                    'url' => '/dashboard/categories'
                ],
                [
                    'title' => 'Özellik Yönetimi',
                    'url' => '/dashboard/products/specs'
                ],
                [
                    'title' => 'Renk Setleri',
                    'url' => '/dashboard/products/colors'
                ],
                [
                    'title' => 'Vergi Tanımları',
                    'url' => '/dashboard/products/tax'
                ],
                [
                    'title' => 'Ürün Birimleri',
                    'url' => '/dashboard/products/units'
                ],
                [
                    'title' => 'Ürün Yorumları',
                    'url' => '/dashboard/products/product-reviews'
                ],
                [
                    'title' => 'Ürün Soruları',
                    'url' => '/dashboard/products/product-questions'
                ],
                [
                    'title' => 'Fiyat Uyarı İstekleri',
                    'url' => '/dashboard/products/price-warning-requests'
                ],
                [
                    'title' => 'Stok Uyarı İstekleri',
                    'url' => '/dashboard/products/stock-warning-requests'
                ],
                [
                    'title' => 'Üretici Yönetimi',
                    'url' => '/dashboard/products/providers'
                ]
            ],
        ],
        [
            'name' => 'Kullanıcılar',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="19.26" height="23.98" viewBox="0 0 19.26 23.98">
                <g id="Group_1170" data-name="Group 1170" transform="translate(-10.999 -7.176)">
                    <path id="user_2_" data-name="user (2)" d="M146.756,46.378a5.341,5.341,0,0,1-.043.668c.013-.089.025-.18.036-.269a5.217,5.217,0,0,1-.348,1.284c.033-.081.069-.163.1-.244a5.074,5.074,0,0,1-.656,1.123l.16-.206a5.168,5.168,0,0,1-.912.912l.206-.16a5.175,5.175,0,0,1-1.123.656l.244-.1a5.217,5.217,0,0,1-1.284.348c.089-.013.18-.025.269-.036a5.118,5.118,0,0,1-1.337,0c.089.013.18.025.269.036a5.217,5.217,0,0,1-1.284-.348l.244.1a5.074,5.074,0,0,1-1.123-.656l.206.16a5.168,5.168,0,0,1-.912-.912l.16.206a5.176,5.176,0,0,1-.656-1.123c.033.081.069.163.1.244a5.217,5.217,0,0,1-.348-1.284c.013.089.025.18.036.269a5.119,5.119,0,0,1,0-1.337c-.013.089-.025.18-.036.269a5.217,5.217,0,0,1,.348-1.284c-.033.081-.069.163-.1.244a5.074,5.074,0,0,1,.656-1.123l-.16.206a5.168,5.168,0,0,1,.912-.912l-.206.16a5.175,5.175,0,0,1,1.123-.656l-.244.1a5.216,5.216,0,0,1,1.284-.348c-.089.013-.18.025-.269.036a5.117,5.117,0,0,1,1.337,0c-.089-.013-.18-.025-.269-.036a5.217,5.217,0,0,1,1.284.348l-.244-.1a5.074,5.074,0,0,1,1.123.656l-.206-.16a5.168,5.168,0,0,1,.912.912l-.16-.206a5.176,5.176,0,0,1,.656,1.123c-.033-.081-.069-.163-.1-.244a5.217,5.217,0,0,1,.348,1.284c-.013-.089-.025-.18-.036-.269a5.869,5.869,0,0,1,.043.668,1.017,1.017,0,1,0,2.033,0,5.994,5.994,0,0,0-1.088-3.454,6.976,6.976,0,0,0-.628-.765,6.48,6.48,0,0,0-.75-.646,5.981,5.981,0,0,0-1.586-.844,6.065,6.065,0,0,0-6.616,1.8,6.684,6.684,0,0,0-.59.818,6.254,6.254,0,0,0-.432.9,6.034,6.034,0,0,0,3.047,7.658,5.655,5.655,0,0,0,1.988.552,6.022,6.022,0,0,0,6.555-4.971,6.816,6.816,0,0,0,.094-1.042,1.014,1.014,0,0,0-2.028-.008Zm3.373,15.893H137.088c-.577,0-1.154.005-1.731,0a1.525,1.525,0,0,1-.188-.013c.089.013.18.025.269.036a1.278,1.278,0,0,1-.292-.081l.244.1a1.289,1.289,0,0,1-.285-.168l.206.16a1.468,1.468,0,0,1-.208-.208l.16.206a1.4,1.4,0,0,1-.168-.285c.033.081.069.163.1.244a1.467,1.467,0,0,1-.081-.292c.013.089.025.18.036.269a7.289,7.289,0,0,1-.013-.943V60.209a6.173,6.173,0,0,1,.051-.811c-.013.089-.025.18-.036.269a5.945,5.945,0,0,1,.414-1.517c-.033.081-.069.163-.1.244a5.976,5.976,0,0,1,.76-1.3l-.16.206a6.033,6.033,0,0,1,1.057-1.057l-.206.16a5.978,5.978,0,0,1,1.3-.76l-.244.1a6.022,6.022,0,0,1,1.517-.414c-.089.013-.18.025-.269.036a8.8,8.8,0,0,1,1.128-.051H145a9.88,9.88,0,0,1,1.256.051c-.089-.013-.18-.025-.269-.036a5.945,5.945,0,0,1,1.517.414l-.244-.1a5.977,5.977,0,0,1,1.3.76l-.206-.16A6.033,6.033,0,0,1,149.4,57.3l-.16-.206a5.978,5.978,0,0,1,.76,1.3c-.033-.081-.069-.163-.1-.244a6.021,6.021,0,0,1,.414,1.517c-.013-.089-.025-.18-.036-.269a9.161,9.161,0,0,1,.051,1.151v1.258a3.491,3.491,0,0,1-.013.432c.013-.089.025-.18.036-.269a1.278,1.278,0,0,1-.081.292c.033-.081.069-.163.1-.244a1.289,1.289,0,0,1-.168.285l.16-.206a1.468,1.468,0,0,1-.208.208l.206-.16a1.4,1.4,0,0,1-.285.168l.244-.1a1.468,1.468,0,0,1-.292.081c.089-.013.18-.025.269-.036-.056.008-.114.01-.173.013a1.061,1.061,0,0,0-.719.3,1.017,1.017,0,0,0,.719,1.736,2.278,2.278,0,0,0,2.148-1.609,4,4,0,0,0,.089-1.167,15.257,15.257,0,0,0-.125-2.638,6.882,6.882,0,0,0-5.086-5.393,9.032,9.032,0,0,0-2.186-.206H140.46a8.622,8.622,0,0,0-2.239.231,6.885,6.885,0,0,0-5,5.454,16.579,16.579,0,0,0-.109,2.61,3.377,3.377,0,0,0,.122,1.2,2.379,2.379,0,0,0,.928,1.174,2.244,2.244,0,0,0,1.184.341c.2,0,.4,0,.595,0h14.192a1.018,1.018,0,0,0,0-2.036Z" transform="translate(-122.109 -33.15)" fill="#d8d8d8"/>
                </g>
            </svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['admin'],
            'items' => [
                [
                    'title' => 'Kullanıcı Yönetimi',
                    'url' => '/dashboard/users'
                ],
                [
                    'title' => 'Servis Yönetimi',
                    'url' => '/dashboard/users/services'
                ],
                [
                    'title' => 'Yetki Yönetimi',
                    'url' => '/dashboard/users/types'
                ]
            ],
        ],
        [
            'name' => 'Kargo',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24.214" height="18.458" viewBox="0 0 24.214 18.458">
            <g id="shipping" transform="translate(-0.75 -4.35)">
                <path id="Path_76" data-name="Path 76" d="M19.256,19.061h-8.38a.877.877,0,0,1,0-1.755h8.38a.877.877,0,0,1,0,1.755Zm4.829,0h-.211a.877.877,0,1,1,0-1.755h.211a.435.435,0,0,0,.442-.435V13.86a.442.442,0,0,0-.337-.428H19.017a2.2,2.2,0,0,1-2.2-2.19V6.54a.428.428,0,0,0-.435-.435H6.047a.877.877,0,0,1,0-1.755H16.385a2.19,2.19,0,0,1,2.19,2.19v4.688a.435.435,0,0,0,.442.435h5.067a2.681,2.681,0,0,1,.477.049l.154.049a2.176,2.176,0,0,1,1.565,2.106v3.011a2.2,2.2,0,0,1-2.2,2.183Z" transform="translate(-1.318)" fill="#d8d8d8"/>
                <path id="Path_77" data-name="Path 77" d="M24.47,14.6a.87.87,0,0,1-.821-.582l-1.4-3.9a.421.421,0,0,0-.33-.175H17.767a.877.877,0,1,1,0-1.755h4.148A2.162,2.162,0,0,1,23.81,9.327a1,1,0,0,1,.056.126l1.4,3.979a.884.884,0,0,1-.533,1.123,1.081,1.081,0,0,1-.267.049Zm-2.821,9.349a3.193,3.193,0,1,1,3.193-3.193A3.193,3.193,0,0,1,21.649,23.953Zm0-4.632a1.439,1.439,0,1,0,1.4,1.439A1.439,1.439,0,0,0,21.649,19.321ZM8.643,23.953a3.193,3.193,0,1,1,3.193-3.193A3.193,3.193,0,0,1,8.643,23.953Zm0-4.632a1.439,1.439,0,1,0,1.439,1.439A1.439,1.439,0,0,0,8.643,19.321Z" transform="translate(-1.401 -1.145)" fill="#d8d8d8"/>
                <path id="Path_78" data-name="Path 78" d="M16.366,20.945a.87.87,0,0,1-.877-.877V12.4a.877.877,0,0,1,1.755,0v7.671a.87.87,0,0,1-.877.877Zm-8.991-8.52H1.627a.877.877,0,0,1,0-1.755H7.375a.877.877,0,0,1,0,1.755Zm1.081,3.916h-3a.877.877,0,1,1,0-1.755h3a.877.877,0,1,1,0,1.755Z" transform="translate(0 -1.884)" fill="#d8d8d8"/>
            </g>
        </svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['*'],
            'items' => [
                [
                    'title' => 'Firma Yönetimi',
                    'url' => '/dashboard/cargo'
                ],
                [
                    'title' => 'Gönderim Bölgeleri',
                    'url' => '/dashboard/cargo/shipping-zones'
                ],
                [
                    'title' => 'Desiye Ayarları',
                    'url' => '/dashboard/cargo/cargo-settings'
                ]
            ]
        ],
        [
            'name' => 'Kampanya Yönetimi',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="19.26" height="23.98" viewBox="0 0 19.26 23.98">
            <g id="Group_1170" data-name="Group 1170" transform="translate(-10.999 -7.176)">
                <path id="user_2_" data-name="user (2)" d="M146.756,46.378a5.341,5.341,0,0,1-.043.668c.013-.089.025-.18.036-.269a5.217,5.217,0,0,1-.348,1.284c.033-.081.069-.163.1-.244a5.074,5.074,0,0,1-.656,1.123l.16-.206a5.168,5.168,0,0,1-.912.912l.206-.16a5.175,5.175,0,0,1-1.123.656l.244-.1a5.217,5.217,0,0,1-1.284.348c.089-.013.18-.025.269-.036a5.118,5.118,0,0,1-1.337,0c.089.013.18.025.269.036a5.217,5.217,0,0,1-1.284-.348l.244.1a5.074,5.074,0,0,1-1.123-.656l.206.16a5.168,5.168,0,0,1-.912-.912l.16.206a5.176,5.176,0,0,1-.656-1.123c.033.081.069.163.1.244a5.217,5.217,0,0,1-.348-1.284c.013.089.025.18.036.269a5.119,5.119,0,0,1,0-1.337c-.013.089-.025.18-.036.269a5.217,5.217,0,0,1,.348-1.284c-.033.081-.069.163-.1.244a5.074,5.074,0,0,1,.656-1.123l-.16.206a5.168,5.168,0,0,1,.912-.912l-.206.16a5.175,5.175,0,0,1,1.123-.656l-.244.1a5.216,5.216,0,0,1,1.284-.348c-.089.013-.18.025-.269.036a5.117,5.117,0,0,1,1.337,0c-.089-.013-.18-.025-.269-.036a5.217,5.217,0,0,1,1.284.348l-.244-.1a5.074,5.074,0,0,1,1.123.656l-.206-.16a5.168,5.168,0,0,1,.912.912l-.16-.206a5.176,5.176,0,0,1,.656,1.123c-.033-.081-.069-.163-.1-.244a5.217,5.217,0,0,1,.348,1.284c-.013-.089-.025-.18-.036-.269a5.869,5.869,0,0,1,.043.668,1.017,1.017,0,1,0,2.033,0,5.994,5.994,0,0,0-1.088-3.454,6.976,6.976,0,0,0-.628-.765,6.48,6.48,0,0,0-.75-.646,5.981,5.981,0,0,0-1.586-.844,6.065,6.065,0,0,0-6.616,1.8,6.684,6.684,0,0,0-.59.818,6.254,6.254,0,0,0-.432.9,6.034,6.034,0,0,0,3.047,7.658,5.655,5.655,0,0,0,1.988.552,6.022,6.022,0,0,0,6.555-4.971,6.816,6.816,0,0,0,.094-1.042,1.014,1.014,0,0,0-2.028-.008Zm3.373,15.893H137.088c-.577,0-1.154.005-1.731,0a1.525,1.525,0,0,1-.188-.013c.089.013.18.025.269.036a1.278,1.278,0,0,1-.292-.081l.244.1a1.289,1.289,0,0,1-.285-.168l.206.16a1.468,1.468,0,0,1-.208-.208l.16.206a1.4,1.4,0,0,1-.168-.285c.033.081.069.163.1.244a1.467,1.467,0,0,1-.081-.292c.013.089.025.18.036.269a7.289,7.289,0,0,1-.013-.943V60.209a6.173,6.173,0,0,1,.051-.811c-.013.089-.025.18-.036.269a5.945,5.945,0,0,1,.414-1.517c-.033.081-.069.163-.1.244a5.976,5.976,0,0,1,.76-1.3l-.16.206a6.033,6.033,0,0,1,1.057-1.057l-.206.16a5.978,5.978,0,0,1,1.3-.76l-.244.1a6.022,6.022,0,0,1,1.517-.414c-.089.013-.18.025-.269.036a8.8,8.8,0,0,1,1.128-.051H145a9.88,9.88,0,0,1,1.256.051c-.089-.013-.18-.025-.269-.036a5.945,5.945,0,0,1,1.517.414l-.244-.1a5.977,5.977,0,0,1,1.3.76l-.206-.16A6.033,6.033,0,0,1,149.4,57.3l-.16-.206a5.978,5.978,0,0,1,.76,1.3c-.033-.081-.069-.163-.1-.244a6.021,6.021,0,0,1,.414,1.517c-.013-.089-.025-.18-.036-.269a9.161,9.161,0,0,1,.051,1.151v1.258a3.491,3.491,0,0,1-.013.432c.013-.089.025-.18.036-.269a1.278,1.278,0,0,1-.081.292c.033-.081.069-.163.1-.244a1.289,1.289,0,0,1-.168.285l.16-.206a1.468,1.468,0,0,1-.208.208l.206-.16a1.4,1.4,0,0,1-.285.168l.244-.1a1.468,1.468,0,0,1-.292.081c.089-.013.18-.025.269-.036-.056.008-.114.01-.173.013a1.061,1.061,0,0,0-.719.3,1.017,1.017,0,0,0,.719,1.736,2.278,2.278,0,0,0,2.148-1.609,4,4,0,0,0,.089-1.167,15.257,15.257,0,0,0-.125-2.638,6.882,6.882,0,0,0-5.086-5.393,9.032,9.032,0,0,0-2.186-.206H140.46a8.622,8.622,0,0,0-2.239.231,6.885,6.885,0,0,0-5,5.454,16.579,16.579,0,0,0-.109,2.61,3.377,3.377,0,0,0,.122,1.2,2.379,2.379,0,0,0,.928,1.174,2.244,2.244,0,0,0,1.184.341c.2,0,.4,0,.595,0h14.192a1.018,1.018,0,0,0,0-2.036Z" transform="translate(-122.109 -33.15)" fill="#d8d8d8"/>
            </g>
        </svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['*'],
            'items' => [
                [
                    'title' => 'Ürün Kampanya Yönetimi',
                    'url' => '/dashboard/campaign'
                ],
                [
                    'title' => 'Toplu E-Posta Gönderimi',
                    'url' => '/dashboard/campaign/mass-email-send'
                ],
                [
                    'title' => 'Hediye Kartı Yönetimi',
                    'url' => '/dashboard/campaign/giftcards'
                ],
                [
                    'title' => 'Slayt Yönetimi',
                    'url' => '/dashboard/campaign/slides'
                ]
            ]
        ],
        [
            'name' => 'İçerik Yönetimi',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16.36" height="19.086" viewBox="0 0 16.36 19.086">
            <path id="text_1_" data-name="text (1)" d="M19.678,13.907h-15A.684.684,0,0,0,4,14.588v1.363a.682.682,0,0,0,.682.682h15a.682.682,0,0,0,.682-.682V14.588A.682.682,0,0,0,19.678,13.907Zm0-5.453h-15A.684.684,0,0,0,4,9.135V10.5a.682.682,0,0,0,.682.682h15a.682.682,0,0,0,.682-.682V9.135A.682.682,0,0,0,19.678,8.453ZM12.862,19.36H4.682A.684.684,0,0,0,4,20.041V21.4a.682.682,0,0,0,.682.682h8.18a.682.682,0,0,0,.682-.682V20.041A.682.682,0,0,0,12.862,19.36ZM19.678,3h-15A.684.684,0,0,0,4,3.682V5.045a.682.682,0,0,0,.682.682h15a.682.682,0,0,0,.682-.682V3.682A.682.682,0,0,0,19.678,3Z" transform="translate(-4 -3)" fill="#d8d8d8" fill-rule="evenodd"/>
        </svg>',
            'url' => '/dashboard/content',
            'active' => false,
            'user_types' => ['*'],
            'items' => null
        ],
        [
            'name' => 'Bayilik',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.002" viewBox="0 0 20.007 20.002">
            <g id="Group_1171" data-name="Group 1171" transform="translate(-10.999 -9.665)">
                <path id="shop" d="M22,7.82a1.25,1.25,0,0,0,0-.19h0l-2-5A1,1,0,0,0,19,2H5a1,1,0,0,0-.93.63l-2,5h0a1.25,1.25,0,0,0,0,.19A.58.58,0,0,0,2,8H2a4,4,0,0,0,2,3.4V21a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V11.44A4,4,0,0,0,22,8h0a.58.58,0,0,0,0-.18ZM13,20H11V16h2Zm5,0H15V15a1,1,0,0,0-1-1H10a1,1,0,0,0-1,1v5H6V12a4,4,0,0,0,3-1.38,4,4,0,0,0,6,0A4,4,0,0,0,18,12Zm0-10a2,2,0,0,1-2-2,1,1,0,0,0-2,0,2,2,0,0,1-4,0A1,1,0,0,0,8,8a2,2,0,1,1-4,.15L5.68,4H18.32L20,8.15A2,2,0,0,1,18,10Z" transform="translate(8.999 7.668)" fill="#d8d8d8"/>
            </g>
        </svg>',
            'url' => '/dashboard/franchise',
            'active' => false,
            'user_types' => ['*'],
            'items' => null
        ],
        [
            'name' => 'Ödeme',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18">
            <path id="checkout" d="M19,8,14,3,13,4l4,4H7l4-4L10,3,5,8H1v2H2.5L4,21H20l1.5-11H23V8ZM9,18H7V12H9Zm4,0H11V12h2Zm4,0H15V12h2Z" transform="translate(-1 -3)" fill="#d9d9d9"/>
        </svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['*'],
            'items' => [
                [
                    'title' => 'Sanal Pos Yönetimi',
                    'url' => '/dashboard/payment/virtual-pos'
                ],
                [
                    'title' => 'Mobil Ödeme',
                    'url' => '/dashboard/payment/mobile'
                ],
                [
                    'title' => 'Banka Havale Ayarları',
                    'url' => '/dashboard/payment/bank-eft-settings'
                ],
                [
                    'title' => 'Diğer Ödeme Ayarları',
                    'url' => '/dashboard/payment/settings'
                ],
                [
                    'title' => 'Havale Bildirim Ayarları',
                    'url' => '/dashboard/payment/eft-settings'
                ]
            ]
        ],
        [
            'name' => 'Entegre',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="19.921" height="19.921" viewBox="0 0 19.921 19.921">
            <path id="puzzle" d="M17,22H5a3,3,0,0,1-3-3V9A3,3,0,0,1,5,6H6a4,4,0,0,1,7.3-2.18A3.86,3.86,0,0,1,14,6h3a1,1,0,0,1,1,1v3a4,4,0,0,1,2.18,7.3A3.86,3.86,0,0,1,18,18h0v3A1,1,0,0,1,17,22ZM5,8A1,1,0,0,0,4,9V19a1,1,0,0,0,1,1H16V16.82a1,1,0,0,1,1.33-.95,1.77,1.77,0,0,0,1.74-.23,1.927,1.927,0,0,0,.45-2.96,1.89,1.89,0,0,0-2.17-.55,1,1,0,0,1-1.33-.95V8h-3.2a1,1,0,0,1-1-1.33,1.77,1.77,0,0,0-.23-1.74,1.94,1.94,0,0,0-3-.43A2,2,0,0,0,8,6a1.89,1.89,0,0,0,.13.67A1,1,0,0,1,7.18,8Z" transform="translate(-2 -2.079)" fill="#d9d9d9"/>
        </svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['*'],
            'items' => [
                [
                    'title' => 'Tedarikçi Firmalar',
                    'url' => '/dashboard/integration/providers'
                ],
                [
                    'title' => 'XML Yönetimi',
                    'url' => '/dashboard/integration/xml'
                ],
                [
                    'title' => 'Pazaryeri Yönetimi',
                    'url' => '/dashboard/integration/marketplaces'
                ]
            ]
        ],
        [
            'name' => 'Raporlar',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
            <g id="Group_1172" data-name="Group 1172" transform="translate(-55 -711)">
                <path id="report-file" d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm5.21,2.386-1.673,2.152-.868-.781a1,1,0,0,0-1.45.119l-2,2.5a1,1,0,1,0,1.562,1.249l1.338-1.672.879.791a1,1,0,0,0,1.458-.129l2.333-3a1,1,0,1,0-1.579-1.228Zm5.777-3.448a1.009,1.009,0,0,0-.279-.644v0l-6-6h0a.99.99,0,0,0-.286-.193c-.03-.014-.061-.022-.092-.033a.983.983,0,0,0-.267-.054C13.039,2.011,13.021,2,13,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9c0-.022-.011-.04-.012-.062ZM14,5.414,16.586,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z" transform="translate(51 709)" fill="#d9d9d9"/>
            </g>
        </svg>',
            'url' => '/dashboard/reports',
            'active' => false,
            'user_types' => ['*'],
            'items' => null,
        ],
        [
            'name' => 'Site Ayarları',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 478.703 478.703" style="enable-background:new 0 0 478.703 478.703;" xml:space="preserve">
<g>
	<g>
		<path d="M454.2,189.101l-33.6-5.7c-3.5-11.3-8-22.2-13.5-32.6l19.8-27.7c8.4-11.8,7.1-27.9-3.2-38.1l-29.8-29.8    c-5.6-5.6-13-8.7-20.9-8.7c-6.2,0-12.1,1.9-17.1,5.5l-27.8,19.8c-10.8-5.7-22.1-10.4-33.8-13.9l-5.6-33.2    c-2.4-14.3-14.7-24.7-29.2-24.7h-42.1c-14.5,0-26.8,10.4-29.2,24.7l-5.8,34c-11.2,3.5-22.1,8.1-32.5,13.7l-27.5-19.8    c-5-3.6-11-5.5-17.2-5.5c-7.9,0-15.4,3.1-20.9,8.7l-29.9,29.8c-10.2,10.2-11.6,26.3-3.2,38.1l20,28.1    c-5.5,10.5-9.9,21.4-13.3,32.7l-33.2,5.6c-14.3,2.4-24.7,14.7-24.7,29.2v42.1c0,14.5,10.4,26.8,24.7,29.2l34,5.8    c3.5,11.2,8.1,22.1,13.7,32.5l-19.7,27.4c-8.4,11.8-7.1,27.9,3.2,38.1l29.8,29.8c5.6,5.6,13,8.7,20.9,8.7c6.2,0,12.1-1.9,17.1-5.5    l28.1-20c10.1,5.3,20.7,9.6,31.6,13l5.6,33.6c2.4,14.3,14.7,24.7,29.2,24.7h42.2c14.5,0,26.8-10.4,29.2-24.7l5.7-33.6    c11.3-3.5,22.2-8,32.6-13.5l27.7,19.8c5,3.6,11,5.5,17.2,5.5l0,0c7.9,0,15.3-3.1,20.9-8.7l29.8-29.8c10.2-10.2,11.6-26.3,3.2-38.1    l-19.8-27.8c5.5-10.5,10.1-21.4,13.5-32.6l33.6-5.6c14.3-2.4,24.7-14.7,24.7-29.2v-42.1    C478.9,203.801,468.5,191.501,454.2,189.101z M451.9,260.401c0,1.3-0.9,2.4-2.2,2.6l-42,7c-5.3,0.9-9.5,4.8-10.8,9.9    c-3.8,14.7-9.6,28.8-17.4,41.9c-2.7,4.6-2.5,10.3,0.6,14.7l24.7,34.8c0.7,1,0.6,2.5-0.3,3.4l-29.8,29.8c-0.7,0.7-1.4,0.8-1.9,0.8    c-0.6,0-1.1-0.2-1.5-0.5l-34.7-24.7c-4.3-3.1-10.1-3.3-14.7-0.6c-13.1,7.8-27.2,13.6-41.9,17.4c-5.2,1.3-9.1,5.6-9.9,10.8l-7.1,42    c-0.2,1.3-1.3,2.2-2.6,2.2h-42.1c-1.3,0-2.4-0.9-2.6-2.2l-7-42c-0.9-5.3-4.8-9.5-9.9-10.8c-14.3-3.7-28.1-9.4-41-16.8    c-2.1-1.2-4.5-1.8-6.8-1.8c-2.7,0-5.5,0.8-7.8,2.5l-35,24.9c-0.5,0.3-1,0.5-1.5,0.5c-0.4,0-1.2-0.1-1.9-0.8l-29.8-29.8    c-0.9-0.9-1-2.3-0.3-3.4l24.6-34.5c3.1-4.4,3.3-10.2,0.6-14.8c-7.8-13-13.8-27.1-17.6-41.8c-1.4-5.1-5.6-9-10.8-9.9l-42.3-7.2    c-1.3-0.2-2.2-1.3-2.2-2.6v-42.1c0-1.3,0.9-2.4,2.2-2.6l41.7-7c5.3-0.9,9.6-4.8,10.9-10c3.7-14.7,9.4-28.9,17.1-42    c2.7-4.6,2.4-10.3-0.7-14.6l-24.9-35c-0.7-1-0.6-2.5,0.3-3.4l29.8-29.8c0.7-0.7,1.4-0.8,1.9-0.8c0.6,0,1.1,0.2,1.5,0.5l34.5,24.6    c4.4,3.1,10.2,3.3,14.8,0.6c13-7.8,27.1-13.8,41.8-17.6c5.1-1.4,9-5.6,9.9-10.8l7.2-42.3c0.2-1.3,1.3-2.2,2.6-2.2h42.1    c1.3,0,2.4,0.9,2.6,2.2l7,41.7c0.9,5.3,4.8,9.6,10,10.9c15.1,3.8,29.5,9.7,42.9,17.6c4.6,2.7,10.3,2.5,14.7-0.6l34.5-24.8    c0.5-0.3,1-0.5,1.5-0.5c0.4,0,1.2,0.1,1.9,0.8l29.8,29.8c0.9,0.9,1,2.3,0.3,3.4l-24.7,34.7c-3.1,4.3-3.3,10.1-0.6,14.7    c7.8,13.1,13.6,27.2,17.4,41.9c1.3,5.2,5.6,9.1,10.8,9.9l42,7.1c1.3,0.2,2.2,1.3,2.2,2.6v42.1H451.9z" fill="#d8d8d8"/>
		<path d="M239.4,136.001c-57,0-103.3,46.3-103.3,103.3s46.3,103.3,103.3,103.3s103.3-46.3,103.3-103.3S296.4,136.001,239.4,136.001    z M239.4,315.601c-42.1,0-76.3-34.2-76.3-76.3s34.2-76.3,76.3-76.3s76.3,34.2,76.3,76.3S281.5,315.601,239.4,315.601z" fill="#d8d8d8"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>',
            'url' => null,
            'active' => false,
            'user_types' => ['*'],
            'items' => [
                [
                    'title' => 'Genel Ayarlar',
                    'url' => '/dashboard/settings'
                ],
                [
                    'title' => 'Tema Yönetimi',
                    'url' => '/dashboard/settings/theme'
                ],
                [
                    'title' => 'SEO Ayarları',
                    'url' => '/dashboard/settings/seo'
                ],
                [
                    'title' => 'SMS Ayarları',
                    'url' => '/dashboard/settings/sms'
                ],
                [
                    'title' => 'E-Posta Ayarları',
                    'url' => '/dashboard/settings/email'
                ],
                [
                    'title' => 'Fatura Tasarımı',
                    'url' => '/dashboard/settings/receipt-design'
                ],
                [
                    'title' => 'Bildirim Gönder',
                    'url' => '/dashboard/settings/push-notifications'
                ],
                [
                    'title' => 'Önbellek Temizle',
                    'url' => '/dashboard/settings/clear-cache'
                ]
            ],
        ]
    ]
];
