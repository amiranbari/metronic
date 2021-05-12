<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'داشبورد',
            'icon' => 'media/svg/icons/Design/Layers.svg',
            'page' => 'panel',
            'new-tab' => false
        ],

        // Custom
        [
            'section' => 'مدیریت سیستم',
        ],
        [
            'title' => 'مدیران',
            'icon' => 'media/svg/icons/Communication/Group.svg',
            'bullet' => 'line',
            'page' => [
                'panel/managers',
                'panel/managers/create'
            ]
        ],
        [
            'title' => 'نقش ها',
            'icon' => 'media/svg/icons/General/Visible.svg',
            'bullet' => 'dot',
            'page' => [
                'panel/roles',
                'panel/roles/create'
            ]
        ],



        /*[
            'title' => 'Applications',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Users',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Default',
                            'page' => 'test',
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/user/list-datatable'
                        ],
                        [
                            'title' => 'List - Columns 1',
                            'page' => 'custom/apps/user/list-columns-1'
                        ],
                        [
                            'title' => 'List - Columns 2',
                            'page' => 'custom/apps/user/list-columns-2'
                        ],
                        [
                            'title' => 'Add User',
                            'page' => 'custom/apps/user/add-user'
                        ],
                        [
                            'title' => 'Edit User',
                            'page' => 'custom/apps/user/edit-user'
                        ],
                    ]
                ],
                [
                    'title' => 'Profile',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Profile 1',
                            'bullet' => 'line',
                            'submenu' => [
                                [
                                    'title' => 'Overview',
                                    'page' => 'custom/apps/profile/profile-1/overview'
                                ],
                                [
                                    'title' => 'Personal Information',
                                    'page' => 'custom/apps/profile/profile-1/personal-information'
                                ],
                                [
                                    'title' => 'Account Information',
                                    'page' => 'custom/apps/profile/profile-1/account-information'
                                ],
                                [
                                    'title' => 'Change Password',
                                    'page' => 'custom/apps/profile/profile-1/change-password'
                                ],
                                [
                                    'title' => 'Email Settings',
                                    'page' => 'custom/apps/profile/profile-1/email-settings'
                                ]
                            ]
                        ],
                        [
                            'title' => 'Profile 2',
                            'page' => 'custom/apps/profile/profile-2'
                        ],
                        [
                            'title' => 'Profile 3',
                            'page' => 'custom/apps/profile/profile-3'
                        ],
                        [
                            'title' => 'Profile 4',
                            'page' => 'custom/apps/profile/profile-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Contacts',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Columns',
                            'page' => 'custom/apps/contacts/list-columns'
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/contacts/list-datatable'
                        ],
                        [
                            'title' => 'View Contact',
                            'page' => 'custom/apps/contacts/view-contact'
                        ],
                        [
                            'title' => 'Add Contact',
                            'page' => 'custom/apps/contacts/add-contact'
                        ],
                        [
                            'title' => 'Edit Contact',
                            'page' => 'custom/apps/contacts/edit-contact'
                        ]
                    ]
                ],
                [
                    'title' => 'Projects',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Columns 1',
                            'page' => 'custom/apps/projects/list-columns-1'
                        ],
                        [
                            'title' => 'List - Columns 2',
                            'page' => 'custom/apps/projects/list-columns-2'
                        ],
                        [
                            'title' => 'List - Columns 3',
                            'page' => 'custom/apps/projects/list-columns-3'
                        ],
                        [
                            'title' => 'List - Columns 4',
                            'page' => 'custom/apps/projects/list-columns-4'
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/projects/list-datatable'
                        ],
                        [
                            'title' => 'View Project',
                            'page' => 'custom/apps/projects/view-project'
                        ],
                        [
                            'title' => 'Add Project',
                            'page' => 'custom/apps/projects/add-project'
                        ],
                        [
                            'title' => 'Edit Project',
                            'page' => 'custom/apps/projects/edit-project'
                        ]
                    ]
                ],
                [
                    'title' => 'Support Center',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Home 1',
                            'page' => 'custom/apps/support-center/home-1'
                        ],
                        [
                            'title' => 'Home 2',
                            'page' => 'custom/apps/support-center/home-2'
                        ],
                        [
                            'title' => 'FAQ 1',
                            'page' => 'custom/apps/support-center/faq-1'
                        ],
                        [
                            'title' => 'FAQ 2',
                            'page' => 'custom/apps/support-center/faq-2'
                        ],
                        [
                            'title' => 'FAQ 3',
                            'page' => 'custom/apps/support-center/faq-3'
                        ],
                        [
                            'title' => 'Feedback',
                            'page' => 'custom/apps/support-center/feedback'
                        ],
                        [
                            'title' => 'License',
                            'page' => 'custom/apps/support-center/license'
                        ]
                    ]
                ],
                [
                    'title' => 'Chat',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Private',
                            'page' => 'custom/apps/chat/private'
                        ],
                        [
                            'title' => 'Group',
                            'page' => 'custom/apps/chat/group'
                        ],
                        [
                            'title' => 'Popup',
                            'page' => 'custom/apps/chat/popup'
                        ]
                    ]
                ],
                [
                    'title' => 'Todo',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Tasks',
                            'page' => 'custom/apps/todo/tasks'
                        ],
                        [
                            'title' => 'Docs',
                            'page' => 'custom/apps/todo/docs'
                        ],
                        [
                            'title' => 'Files',
                            'page' => 'custom/apps/todo/files'
                        ]
                    ]
                ],
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ]
            ]
        ],
        [
            'title' => 'Pages',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Wizard',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Wizard 1',
                            'page' => 'custom/pages/wizard/wizard-1'
                        ],
                        [
                            'title' => 'Wizard 2',
                            'page' => 'custom/pages/wizard/wizard-2'
                        ],
                        [
                            'title' => 'Wizard 3',
                            'page' => 'custom/pages/wizard/wizard-3'
                        ],
                        [
                            'title' => 'Wizard 4',
                            'page' => 'custom/pages/wizard/wizard-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Pricing Tables',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Pricing Tables 1',
                            'page' => 'custom/pages/pricing/pricing-1'
                        ],
                        [
                            'title' => 'Pricing Tables 2',
                            'page' => 'custom/pages/pricing/pricing-2'
                        ],
                        [
                            'title' => 'Pricing Tables 3',
                            'page' => 'custom/pages/pricing/pricing-3'
                        ],
                        [
                            'title' => 'Pricing Tables 4',
                            'page' => 'custom/pages/pricing/pricing-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Invoices',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Invoice 1',
                            'page' => 'custom/pages/invoices/invoice-1'
                        ],
                        [
                            'title' => 'Invoice 2',
                            'page' => 'custom/pages/invoices/invoice-2'
                        ]
                    ]
                ],
                [
                    'title' => 'User Pages',
                    'bullet' => 'dot',
                    'label' => [
                        'type' => 'label-rounded label-primary',
                        'value' => '2'
                    ],
                    'submenu' => [
                        [
                            'title' => 'Login 1',
                            'page' => 'custom/pages/users/login-1',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 2',
                            'page' => 'custom/pages/users/login-2',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 3',
                            'page' => 'custom/pages/users/login-3',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 4',
                            'page' => 'custom/pages/users/login-4',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 5',
                            'page' => 'custom/pages/users/login-5',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 6',
                            'page' => 'custom/pages/users/login-6',
                            'new-tab' => true
                        ]
                    ]
                ],
                [
                    'title' => 'Error Pages',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Error 1',
                            'page' => 'custom/pages/errors/error-1',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 2',
                            'page' => 'custom/pages/errors/error-2',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 3',
                            'page' => 'custom/pages/errors/error-3',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 4',
                            'page' => 'custom/pages/errors/error-4',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 5',
                            'page' => 'custom/pages/errors/error-5',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 6',
                            'page' => 'custom/pages/errors/error-6',
                            'new-tab' => true
                        ]
                    ]
                ]
            ]
        ],*/

    ]

];
