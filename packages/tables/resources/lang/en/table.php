<?php

return [

    'columns' => [

        'text' => [
            'more_list_items' => 'and :count more',
        ],

        'messages' => [
            'copied' => 'Copied',
        ],

    ],

    'fields' => [

        'search' => [
            'label' => 'Search',
            'placeholder' => 'Search',
        ],

        'bulk_select_page' => [
            'label' => 'Select / Deselect all items for bulk actions.',
        ],

        'bulk_select_record' => [
            'label' => 'Select / Deselect item :key for bulk actions.',
        ],

    ],

    'pagination' => [

        'label' => 'Pagination Navigation',

        'overview' => 'Showing :first to :last of :total results',

        'fields' => [

            'records_per_page' => [

                'label' => 'per page',

                'options' => [
                    'all' => 'All',
                ],

            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Go to page :page',
            ],

            'next' => [
                'label' => 'Next',
            ],

            'previous' => [
                'label' => 'Previous',
            ],

        ],

    ],

    'summary' => [

        'heading' => 'Summary',

        'subheadings' => [
            'all' => 'All :label',
            'group' => ':group summary',
            'page' => 'This page',
        ],

        'summarizers' => [

            'average' => [
                'label' => 'Average',
            ],

            'count' => [
                'label' => 'Count',
            ],

            'sum' => [
                'label' => 'Sum',
            ],

        ],

    ],

    'buttons' => [

        'disable_reordering' => [
            'label' => 'Finish reordering records',
        ],

        'enable_reordering' => [
            'label' => 'Reorder records',
        ],

        'filter' => [
            'label' => 'Filter',
        ],

        'group' => [
            'label' => 'Group',
        ],

        'open_bulk_actions' => [
            'label' => 'Bulk actions',
        ],

        'toggle_columns' => [
            'label' => 'Toggle columns',
        ],

    ],

    'empty' => [
        'heading' => 'No records found',
    ],

    'filters' => [

        'buttons' => [

            'remove' => [
                'label' => 'Remove filter',
            ],

            'remove_all' => [
                'label' => 'Remove all filters',
                'tooltip' => 'Remove all filters',
            ],

            'reset' => [
                'label' => 'Reset filters',
            ],

        ],

        'indicator' => 'Active filters',

        'multi_select' => [
            'placeholder' => 'All',
        ],

        'select' => [
            'placeholder' => 'All',
        ],

        'trashed' => [

            'label' => 'Deleted records',

            'only_trashed' => 'Only deleted records',

            'with_trashed' => 'With deleted records',

            'without_trashed' => 'Without deleted records',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'Group by',
                'placeholder' => 'Group by',
            ],

            'direction' => [

                'label' => 'Group direction',

                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'Drag and drop the records into order.',

    'selection_indicator' => [

        'selected_count' => '1 record selected.|:count records selected.',

        'buttons' => [

            'select_all' => [
                'label' => 'Select all :count',
            ],

            'deselect_all' => [
                'label' => 'Deselect all',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Sort by',
            ],

            'direction' => [

                'label' => 'Sort direction',

                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending',
                ],

            ],

        ],

    ],

];
