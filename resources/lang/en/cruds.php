<?php

return [
    'userManagement' => [
        'title'          => 'Student management',
        'title_singular' => 'Student management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Students',
        'title_singular' => 'Student',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => ' ',
            'name'                             => 'Name',
            'name_helper'                      => ' ',
            'email'                            => 'Email',
            'email_helper'                     => ' ',
            'email_verified_at'                => 'Email verified at',
            'email_verified_at_helper'         => ' ',
            'password'                         => 'Password',
            'password_helper'                  => ' ',
            'roles'                            => 'Roles',
            'roles_helper'                     => ' ',
            'remember_token'                   => 'Remember Token',
            'remember_token_helper'            => ' ',
            'created_at'                       => 'Created at',
            'created_at_helper'                => ' ',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => ' ',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => ' ',
            'phone_number'                     => 'Phone Number',
            'phone_number_helper'              => ' ',
            'phone_otp'                        => 'Phone Otp',
            'phone_otp_helper'                 => ' ',
            'otp_verified'                     => 'Otp Verified',
            'otp_verified_helper'              => ' ',
            'provider'                         => 'Provider',
            'provider_helper'                  => ' ',
            'provider_response'                => 'Provider Response',
            'provider_response_helper'         => ' ',
            'parking_location_assigned'        => 'Parking Location Assigned',
            'parking_location_assigned_helper' => ' ',
            'is_active'                        => 'Is Active',
            'is_active_helper'                 => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'page_text'             => 'Full Text',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'parkingLocation' => [
        'title'          => 'Parking Locations',
        'title_singular' => 'Parking Location',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'location'             => 'Location',
            'location_helper'      => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'location_code'        => 'Location Code',
            'location_code_helper' => ' ',
        ],
    ],
    'parkingLocationCode' => [
        'title'          => 'Parking Location Codes',
        'title_singular' => 'Parking Location Code',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'location_code'           => 'Location Code',
            'location_code_helper'    => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'parking_location'        => 'Parking Location',
            'parking_location_helper' => ' ',
        ],
    ],
    'carManagement' => [
        'title'          => 'Car Management',
        'title_singular' => 'Car Management',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'user'                         => 'User',
            'user_helper'                  => ' ',
            'car_name'                     => 'Car Name',
            'car_name_helper'              => ' ',
            'car_plate'                    => 'Car Plate',
            'car_plate_helper'             => ' ',
            'parking_location_code'        => 'Parking Location Code',
            'parking_location_code_helper' => ' ',
            'car_photo'                    => 'Car Photo',
            'car_photo_helper'             => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'photo'                        => 'Photo',
            'photo_helper'                 => ' ',
        ],
    ],
    'subscriptionPackage' => [
        'title'          => 'Subscription Packages',
        'title_singular' => 'Subscription Package',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'title'                    => 'Title',
            'title_helper'             => ' ',
            'subscription_type'        => 'Subscription Type',
            'subscription_type_helper' => ' ',
            'frequency'                => 'Frequency',
            'frequency_helper'         => ' ',
            'service_count'            => 'Service Count',
            'service_count_helper'     => ' ',
            'price_per_session'        => 'Price Per Session',
            'price_per_session_helper' => ' ',
            'status'                   => 'Status',
            'status_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'booking' => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'user'                        => 'User',
            'user_helper'                 => ' ',
            'washer'                      => 'Washer',
            'washer_helper'               => ' ',
            'car'                         => 'Car',
            'car_helper'                  => ' ',
            'parking_code'                => 'Parking Code',
            'parking_code_helper'         => ' ',
            'status'                      => 'Status',
            'status_helper'               => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'total_booking_amount'        => 'Total Booking Amount',
            'total_booking_amount_helper' => ' ',
        ],
    ],
    'bookingDetail' => [
        'title'          => 'Booking Details',
        'title_singular' => 'Booking Detail',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'booking'                  => 'Booking',
            'booking_helper'           => ' ',
            'subscription_type'        => 'Subscription Type',
            'subscription_type_helper' => ' ',
            'frequency'                => 'Frequency',
            'frequency_helper'         => ' ',
            'service_count'            => 'Service Count',
            'service_count_helper'     => ' ',
            'price_per_session'        => 'Price Per Session',
            'price_per_session_helper' => ' ',
            'payment_status'           => 'Payment Status',
            'payment_status_helper'    => ' ',
            'payment_response'         => 'Payment Response',
            'payment_response_helper'  => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'bookingServiceDetail' => [
        'title'          => 'Booking Service Details',
        'title_singular' => 'Booking Service Detail',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'booking'                 => 'Booking',
            'booking_helper'          => ' ',
            'service_datetime'        => 'Service Datetime',
            'service_datetime_helper' => ' ',
            'before_photos'           => 'Before Photos',
            'before_photos_helper'    => ' ',
            'after_photos'            => 'After Photos',
            'after_photos_helper'     => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'helpDesk' => [
        'title'          => 'Help Desk',
        'title_singular' => 'Help Desk',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'user'               => 'User',
            'user_helper'        => ' ',
            'ticket'             => 'Ticket',
            'ticket_helper'      => ' ',
            'subject'            => 'Subject',
            'subject_helper'     => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'parkiongLocationsManagement' => [
        'title'          => 'Locations Management',
        'title_singular' => 'Locations Management',
    ],
    'bookingsManagement' => [
        'title'          => 'Bookings Management',
        'title_singular' => 'Bookings Management',
    ],
    'course' => [
        'title'           => 'Courses',
        'title_singular'  => 'Course',
        'fields'          => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'teacher'                => 'Teacher',
            'teacher_helper'         => ' ',
            'title'                  => 'Title',
            'meta_title'             => 'Meta Title',
            'meta_description'       => 'Meta Description',
            'meta_keyword'           => 'Meta Keyword',
            'title_helper'           => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'price'                  => 'Price',
            'price_helper'           => ' ',
            'thumbnail'              => 'Thumbnail',
            'thumbnail_helper'       => ' ',
            'is_published'           => 'Is Published',
            'is_published_helper'    => ' ',
            'students'               => 'Students',
            'students_helper'        => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
            'course_category'        => 'Course Category',
            'course_category_helper' => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'Lessons',
        'title_singular' => 'Lesson',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Course',
            'course_helper'       => ' ',
            'title'               => 'Title',
            'meta_title'          => 'Meta Title',
            'meta_description'    => 'Meta Description',
            'meta_keyword'        => 'Meta Keyword',
            'title_helper'        => ' ',
            'thumbnail'           => 'Thumbnail',
            'thumbnail_helper'    => ' ',
            'short_text'          => 'Short Text',
            'short_text_helper'   => ' ',
            'long_text'           => 'Long Text',
            'long_text_helper'    => ' ',
            'video'               => 'Video',
            'video_helper'        => ' ',
            'position'            => 'Position',
            'position_helper'     => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'is_free'             => 'Is Free',
            'is_free_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'book' => [
        'title'          => 'Books',
        'title_singular' => 'Book',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => 'Book Title',
            'category'           => 'Category',
            'category_helper'    => 'Category',
            'file'               => 'File',
            'file_helper'        => 'File Upload',
            'cover_image'        => 'Cover Image',
            'cover_image_helper' => 'Book Cover Image',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'resumeTemplate' => [
        'title'          => 'Resume Templates',
        'title_singular' => 'Resume Template',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => 'Resume Title',
            'file'              => 'File',
            'file_helper'       => 'File Upload',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'test' => [
        'title'          => 'Tests',
        'title_singular' => 'Test',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Course',
            'course_helper'       => ' ',
            'lesson'              => 'Lesson',
            'lesson_helper'       => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'test'                  => 'Test',
            'test_helper'           => ' ',
            'question_text'         => 'Question Text',
            'question_text_helper'  => ' ',
            'question_image'        => 'Question Image',
            'question_image_helper' => ' ',
            'points'                => 'Points',
            'points_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'questionOption' => [
        'title'          => 'Question Options',
        'title_singular' => 'Question Option',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'option_text'        => 'Option text',
            'option_text_helper' => ' ',
            'is_correct'         => 'Is Correct',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'testResult' => [
        'title'          => 'Test Results',
        'title_singular' => 'Test Result',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'test'              => 'Test',
            'test_helper'       => ' ',
            'student'           => 'Student',
            'student_helper'    => ' ',
            'score'             => 'Score',
            'score_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'testAnswer' => [
        'title'          => 'Test Answers',
        'title_singular' => 'Test Answer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'test_result'        => 'Test Result',
            'test_result_helper' => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'option'             => 'Option',
            'option_helper'      => ' ',
            'is_correct'         => 'Is Correect',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'courseCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'category_name'        => 'Category Name',
            'category_name_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
];
