<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |سخؤ
    */

    'general' => [
        'all' => 'الكل',
        'yes' => 'نعم',
        'no' => 'لا',
        'copyright' => 'حقوق النشر',
        'custom' => 'مخصص',
        'actions' => 'إجراءات',
        'active' => 'نشيط',
        'buttons' => [
            'save' => 'حفظ',
            'update' => 'تحديث',
        ],
        'hide' => 'إخفاء',
        'inactive' => 'غير نشط',
        'none' => 'لا شيء',
        'show' => 'إظاهر',
        'toggle_navigation' => 'تبديل شريط التنقل',
        'create_new' => 'خلق جديد إبداع جديد',
        'toolbar_btn_groups' => 'شريط الأدوات مع مجموعات الأزرا',
        'more' => 'أكثر',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'إنشاء دور جديد',
                'edit' => 'تعديل دور',
                'management' => 'إدارة الأدوار',
                'label' => 'الأدوار',
                'all' => 'الأدوار',

                'table' => [
                    'number_of_users' => 'عدد المستخدمين',
                    'permissions' => 'الصلاحيات',
                    'role' => 'الدور',
                    'sort' => 'الترتيب',
                    'total' => 'مجموع الدور|مجموع الأدوار',
                ],
            ],

            'permissions' => [
                'all' => 'جميع الأذونات',
                'active' => 'قائمة الأذونات',
                'create' => 'إنشاء إذن',
                'deactivated' => 'إذن معطل',
                'deleted' => 'إذن محذوف',
                'edit' => 'تحرير الإذن',
                'management' => 'إدارة الإذن',
                'label' => 'أذونات',
                'list' => 'قائمة الأذونات',
                'table' => [
                    'created' => 'تم الإنشاء',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'permission' => 'الإذن',
                    'display_name' => 'اسم العرض',
                    'sort' => 'فرز',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'إجمالي الأذونات|إجمالي الأذونات',
                ],
            ],

            'users' => [
                'active' => 'المستخدمون النشطون',
                'all_permissions' => 'جميع الصلاحيات',
                'change_password' => 'تغيير كلمة المرور',
                'change_password_for' => 'تغيير كلمة المرور للمستخدم :user',
                'create' => 'إنشاء مستخدم جديد',
                'deactivated' => 'المستخدمون المعطلون',
                'deleted' => 'المستخدمون المحذوفون',
                'edit' => 'تعديل المستخدم',
                'management' => 'إدارة المستخدمين',
                'no_permissions' => 'بدون صلاحيات',
                'no_roles' => 'بدون أي أدوار.',
                'permissions' => 'صلاحيات',
                'user_actions' => 'إجراءات المستخدم',

                'table' => [
                    'confirmed' => 'مؤكد',
                    'created' => 'تم الإنشاء',
                    'email' => 'البريد الإلكتروني',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'الإسم',
                    'first_name' => 'الاسم الاول',
                    'last_name' => 'الكنية',
                    'no_deactivated' => 'لا يوجد مستخدمين معطلة',
                    'no_deleted' => 'لا يوجد مستخدمين محذوفين',
                    'other_permissions' => 'أذونات أخرى',
                    'permissions' => 'أذونات',
                    'abilities' => 'قدرات',
                    'roles' => 'الأدوار',
                    'social' => 'اجتماعي',
                    'total' => 'إجمالي المستخدم|إجمالي المستخدمين',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'نظرة عامة',
                        'history' => 'التاريخ',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'الصورة الرمزية',
                            'confirmed' => 'تم تأكيد',
                            'created_at' => 'أنشئت في',
                            'deleted_at' => 'تم الحذف في',
                            'email' => 'البريد الإلكتروني',
                            'last_login_at' => 'آخر تسجيل دخول في',
                            'last_login_ip' => 'آخر تسجيل دخول',
                            'last_updated' => 'آخر تحديث',
                            'name' => 'اسم',
                            'first_name' => 'الاسم الاول',
                            'last_name' => 'الكنية',
                            'status' => 'الحالة',
                            'timezone' => 'وحدة زمنية',
                        ],
                    ],
                ],

                'view' => 'عرض المستخدم',
            ],

            'blogs' => [
                'all' => 'جميع المدونات',
                'active' => 'قائمة المدونات',
                'create' => 'انشاء مدونة',
                'deactivated' => 'مدونات معطلة',
                'deleted' => 'مدونة محذوفة',
                'edit' => 'تحرير مدونة',
                'management' => 'إدارة المدونة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'title' => 'عنوان المدونة',
                    'category' => 'فئات المدونة',
                    'published' => 'تاريخ ووقت النشر',
                    'featured_image' => 'صورة مميزة',
                    'content' => 'المحتوى',
                    'tags' => 'العلامات',
                    'meta_title' => 'عنوان الفوقية',
                    'slug' => 'سبيكة',
                    'cannonical_link' => 'رابط الكنسي',
                    'meta_keywords' => 'كلمات دلالية',
                    'meta_description' => 'ميتا الوصف',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع بلوق|إجمالي المدونات',
                ],
            ],

            'blog-category' => [
                'all' => 'جميع فئات المدونة',
                'active' => 'قائمة فئات المدونة',
                'create' => 'إنشاء فئة مدونة',
                'deactivated' => 'فئة المدونة المعطلة',
                'deleted' => 'فئة المدونات المحذوفة',
                'edit' => 'تحرير فئة المدونة',
                'management' => 'فئات المدونة',


                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'اسم التصنيف',
                    'category' => 'فئات المدونة',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع فئات بلوق|مجموع فئات بلوق',
                ],
            ],

            'blog-tag' => [
                'all' => 'جميع علامات المدونة',
                'active' => 'قائمة علامات المدونة',
                'create' => 'إنشاء علامة مدونة',
                'deactivated' => 'علامة مدونة معطلة',
                'deleted' => 'علامة مدونة محذوفة',
                'edit' => 'تحرير علامة المدونة',
                'management' => 'علامات المدونة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'اسم العلامة',
                    'tag' => 'علامة المدونة',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع علامات بلوق|مجموع علامات بلوق',
                ],
            ],

            'pages' => [
                'all' => 'كل الصفحات',
                'active' => 'قائمة الصفحات',
                'create' => 'إنشاء صفحة',
                'deactivated' => 'الصفحة المعطلة',
                'deleted' => 'الصفحة المحذوفة',
                'edit' => 'تعديل الصفحة',
                'management' => 'إدارة الصفحات',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'page_slug' => 'سبيكة الصفحة',
                    'name' => 'اسم الصفحة',
                    'description' => 'وصف',
                    'cannonical_link' => 'رابط الكنسي',
                    'seo_title' => 'عنوان تحسين محركات البحث',
                    'seo_keyword' => 'الكلمة الرئيسية لكبار المسئولين الاقتصاديين',
                    'seo_description' => 'وصف كبار المسئولين الاقتصاديين',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'إجمالي الصفحات|إجمالي الصفحات',
                ],
            ],

            'faqs' => [
                'all' => 'جميع الأسئلة الشائعة',
                'active' => 'قائمة الأسئلة المتكررة',
                'create' => 'إنشاء الأسئلة',
                'deactivated' => 'الأسئلة المتداولة',
                'deleted' => 'الأسئلة الشائعة المحذوفة',
                'edit' => 'تحرير الأسئلة المتكررة',
                'management' => 'إدارة الأسئلة المتداولة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'question' => 'سؤال',
                    'answer' => 'إجابة',
                    'status' => 'الحالة',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع الأسئلة|مجموع الأسئلة',
                ],
            ],

            'email-templates' => [
                'all' => 'جميع قوالب البريد الإلكتروني',
                'active' => 'قائمة قوالب البريد الإلكتروني',
                'create' => 'إنشاء قالب البريد الإلكتروني',
                'deactivated' => 'نموذج البريد الإلكتروني المعطل',
                'deleted' => 'قالب البريد الإلكتروني المحذوف',
                'edit' => 'تحرير قالب البريد الإلكتروني',
                'management' => 'إدارة قالب البريد الإلكتروني',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'slug' => 'سبيكة',
                    'title' => 'عنوان قالب البريد الإلكتروني',
                    'content' => 'المحتوى',
                    'status' => 'الحالة',
                    'createdat' => 'أنشئت في',
                    'createdby' => 'انشأ من قبل',
                    'total' => 'إجمالي قوالب البريد الإلكتروني|إجمالي قوالب البريد الإلكتروني',
                ],
            ],
            'Home' => [
                'Home' => 'الرئيسية',
                'interior de​sign' => 'التصميم الداخلي',
                'Main Section' => 'وجة الصفحة',
                'About Us Company' => 'من نحن',
                'Section1' => 'القسم الأول',
                'Section2' => 'القسم الثاني',
                'Section2-Main' => 'القسم الرئيسي',
                'Section2-Lists' => 'العناصر',

                'Section3' => 'القسم الثالث',
                'Servicess' => 'خدماتنا',
                'Our Team' => 'فريق العمل',
                'website details' => 'تفاصيل الموقع',
                'Social Media' => 'روابط مواقع التواصل الاجتماعي',
                'Our Projects'=>'سبق أعمالنا',
                'Job Forms'=>'أستمارات الوظائف',
                'All Project'=>'جميع المشروعات',
                'servicessOne'=>'الجزء الرئيسي',
                'servicessTwo'=>'تفاصيل الخدمات',
                'servicessThree'=>'الجزء الثالث',
                'Recent Projects'=>'المشاريع الحالية',

                'Project section' => 'قسم المشروعات',
                'jobForms' => 'استمارة وظيفية',
                'description'=>'وصف',
                'Conact'=>'استفسارات العملاء',
                'id'=>'رقم الحقل',
                'list'=>'العنصر',
                'summaryOfProject'=>'المشاريع المميزة',
                'fuel stations'=>'محطات وقود',
                'industrial facilities'=>'منشآت صناعية',
                'medical facilities'=>'منشآت طبية',
                'educational and administrative facilities'=>'منشآت تعليمية و إدارية',
                'All Projects'=>'جميع المشاريع',


                'Mainsectionf' => [
                    'all Record' => 'جميع الحقول',
                    'active' => 'الاجزاء الناشطة',
                    'create' => 'إنشاء حقل جديد',
                    'deactivated' => 'الاجزاء المعطلة',
                    'deleted' => 'الاجزاء المحذوفة',
                    'edit' => 'تحرير / تعديل',



                    'table' => [
                        'img' => 'الصورة',
                        'P1' => 'العنوان الرئيسي',
                        'p2' => 'نبذة عن',
                        'Service name'=>'اسم الخدمة',
                        'created_at' => 'أنشاء منذ',
                        'updated_at' => 'تعديل منذ',
                        'images before'=>'قيل',
                        'images aftar'=>'بعد',
                    ],
                ],
                'Mainsection' => [
                    'img' => 'الصورة',
                    'Main header' => 'العنوان الرئيسي',
                    'Component' => 'المجال',
                    'Paragraph'=>'براجراف',
                    'Component Image' => 'لوجو المجال',
                    'Component Tittle' => 'نبذة مختصرة',
                ],


                'aboutsec1' => [
                    'img' => 'الصورة',
                    'Paragraph1' => 'عنا براجراف الاول',
                    'Paragraph2 ' => 'عنا برجؤاف الثاني',
                    'Paragraph' => 'براجراف',
                    'P1' => 'أسم الخدمة',
                    'P2'=>'وصف الخدمة',
                    'PrjectName'=>'اسم المشروع',
                    'Projectdes'=>'وصف المشروع',
                    'TestCareer' => 'المسمة الوظيفي',
                    'Test opinion' => 'رأي العميل',
                    'name' => 'أسم العميل',
                    'logo' => 'الشعار',
                    'facebook' => 'رابط الفيسبوك',
                    'whatsapp' => 'رقم الواتساب',
                    'instgram' => 'رابط الانستجرام',
                    'tiwtter' => 'رابط التويتر',
                    'Tittle' => 'العنوان الرئيسي',
                
                    'MainImg'=>'الصورة الرئيسية',
                    'OtherImages'=>'صور المشاريع',
                    'Location'=>'موقع المشروع',
                    'Description1'=>'وصف أول للمشروع',
                    'Description2'=>'وصف ثاني للمشروع',



                ],
                'button' => [
                    'About Us' => 'نبذة عن شركتنا',
                    'Our Services' => 'خدماتنا',
                    'Have A Project!' => 'الإطلاع علي مشارعنا',
                ],


            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'تسجيل الدخول',
            'login_button' => 'تسجيل الدخول',
            'login_with' => 'تسجيل الدخول بواسطة :social_media',
            'register_box_title' => 'تسجيل',
            'register_button' => 'تسجيل',
            'remember_me' => 'تذكرني',
        ],

        'contact' => [
            'box_title' => 'اتصل بنا',
            'button' => 'إرسال المعلومات',
        ],

        'passwords' => [
            'expired_password_box_title' => 'انتهت صلاحية كلمة المرور الخاصة بك.',
            'forgot_password' => 'نسيت كلمة مرورك؟',
            'reset_password_box_title' => 'إعادة تعيين كلمة المرور',
            'reset_password_button' => 'إعادة تعيين كلمة المرور',
            'update_password_button' => 'تطوير كلمة السر',
            'send_password_reset_link_button' => 'إرسال رابط إعادة تعيين كلمة المرور',
        ],

        'user' => [
            'passwords' => [
                'change' => 'تغيير كلمة المرور',
            ],

            'profile' => [
                'avatar' => 'الصورة الشخصية',
                'created_at' => 'أنشئت في',
                'edit_information' => 'تعديل البيانات',
                'email' => 'البريد الإلكتروني',
                'last_updated' => 'آخر تحديث',
                'name' => 'الإسم',
                'first_name' => 'الاسم الاول',
                'last_name' => 'الكنية',
                'update_information' => 'تحديث البيانات',
            ],
        ],

    ],
];
