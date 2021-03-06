package com.company.fontawesomepropoc.web.fontawesomepro;

import com.haulmont.cuba.web.gui.icons.IconProvider;
import com.vaadin.server.Resource;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.core.annotation.Order;
import org.springframework.stereotype.Component;

@Order(20)
@Component
public class FontAwesomeProSolidIconProvider implements IconProvider {
    private final Logger log = LoggerFactory.getLogger(FontAwesomeProSolidIconProvider.class);

    @Override
    public Resource getIconResource(String iconPath) {
        Resource resource = null;

        iconPath = iconPath.split(":")[1];

        try {
            resource = ((Resource) FontAwesomeProSolid.class
                    .getDeclaredField(iconPath)
                    .get(null));
        } catch (IllegalAccessException | NoSuchFieldException e) {
            log.warn("There is no icon with name {} in the FontAwesomeProSolid icon set", iconPath);
        }

        return resource;
    }

    @Override
    public boolean canProvide(String iconPath) {
        return iconPath.startsWith("fas:");
    }
}