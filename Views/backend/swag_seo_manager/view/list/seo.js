Ext.define('Shopware.apps.SwagSEOManager.view.list.seo', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.seo-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.SwagSEOManager.view.detail.Window',
            columns: {
                org_path: { header: 'Technische URL', width: 300 },
                path: { header: 'SEO-URL', flex: 1  },
                main: { header: 'Aktiv', width: 50, flex: 0 },
                subshopID: { header: 'Shop', width: 50, flex: 0 }
            }
        };
    }
});