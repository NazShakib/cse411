package com.company.fontawesomepropoc.web.fontawesomepro;

import com.haulmont.cuba.web.gui.icons.IconProvider;
import com.vaadin.server.Resource;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.core.annotation.Order;
import org.springframework.stereotype.Component;

@Order(10)
@Component
public class FontAwesomeProRegularIconProvider implements IconProvider {
    private final Logger log = LoggerFactory.getLogger(FontAwesomeProRegularIconProvider.class);

    @Override
    public Resource getIconResource(String iconPath) {
        Resource resource = null;

        iconPath = iconPath.split(":")[1];

        try {
            resource = ((Resource) FontAwesomeProRegular.class
                    .getDeclaredField(iconPath)
                    .get(null));
        } catch (IllegalAccessException | NoSuchFieldException e) {
            log.warn("There is no icon with name {} in the FontAwesomeProRegular icon set", iconPath);
        }

        return resource;
    }

    @Override
    public boolean canProvide(String iconPath) {
        return iconPath.startsWith("far:");
    }
}