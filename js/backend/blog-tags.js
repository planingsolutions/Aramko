(function() {

    FTX.BlogTags = {

        list: {

            selectors: {
                blog_tags_table: $('#blogtags-table'),
            },

            init: function() {
                var lang = document.getElementsByTagName("html")[0].getAttribute("lang");

                this.selectors.blog_tags_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.blog_tags_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
                        { data: 'status', name: 'status' },
                        { data: 'created_by', name: 'created_by' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }

                    ],
                    order: [
                        [3, "asc"]
                    ],
                    language: {
                        url: '/ITC/public/' + lang + '.json',
                    },
                    searchDelay: 500,
                    "createdRow": function(row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }
        },
    }
})();