Ext.define('Shopware.apps.SwagSEOManager.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.seo-list-window',
    height: 450,
    title : '{s name=window_title}SEO listing{/s}',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.SwagSEOManager.view.list.seo',
            listingStore: 'Shopware.apps.SwagSEOManager.store.seo'
        };
    }
});