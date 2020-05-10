// Define our button, but with the use of props.theme this time
const Button = styled.button`
  font-size: 1em;
  margin: 1em;
  padding: 0.25em 1em;
  border-radius: 3px;
  /* Color the border and text with theme.main */
  color: ${props => props.theme.main};
  border: 2px solid ${props => props.theme.main};
`;
// We are passing a default theme for Buttons that arent wrapped in the ThemeProvider
Button.defaultProps = {
  theme: {
    main: "palevioletred"
  }
}
// Define what props.theme will look like
const theme = {
  main: "mediumseagreen"
};
render(
  <div>
    <Button>Normal</Button>
    <ThemeProvider theme={theme}>
      <Button>Themed</Button>
    </ThemeProvider>
  </div>
);
basically if a component is in the ThemeProvider wrapper you have access to theme in props
NoximusToday at 12:51 PM
I actually read the theme provider and was just getting to understand it before Tez made his suggestion
I already added a simple example
const Wrapper = styled.div`
  color: ${(props) => props.color};
  > * {
    border: red solid 1px;
  }

  .something {
    color: green;
  }

  .somethingElse {
    color: red;
  }
`;
function App() {
  return (
    <Wrapper className="App" color="red">
      <ClassComponentWithProps className="something" name="Nox" />
      <div className="something">Does this work?</div>
      <ClassComponentWithLocalState className="somethingElse" name="Local State" />
    </Wrapper>
  );
}
TezToday at 12:58 PM
@Jacob yeah like that but I make almost everything dynamic with options let show you hold on
export const P = styled.p`
  max-width: ${props => props.maxWidth && props.maxWidth};
  margin-top: ${props =>
    typeof props.marginTop !== 'undefined' &&
    props.theme.spacing.vertical[props.marginTop]};
  margin-bottom: ${props =>
    typeof props.marginBottom !== 'undefined'
      ? props.theme.spacing.vertical[props.marginBottom]
      : props.theme.spacing.vertical.lg};
  margin-left: ${props => props.centered && 'auto'};
  margin-right: ${props => props.centered && 'auto'};
  ${props =>
    fontSizer(
      props.size
        ? props.theme.type.size[props.size]
        : props.theme.type.size.body,
      props.theme.type.multipliers.body,
      props.theme.breakpoints
    )};
  color: ${props => props.color && props.theme.colors[props.color]};
  font-weight: ${props => props.bold && 'bold'};
  text-transform: ${props => props.textTransform && props.textTransform};
  text-align: ${props => props.centered && 'center'};
  cursor: default;
`;
export const Grid = styled.div`
  display: grid;
  ${is('templateColumns')`
    grid-template-columns: ${props => props.templateColumns};
  `};
  ${is('gap')`
    grid-gap: ${props => props.gap};
  `};
  ${is('rowGap')`
    grid-row-gap: ${props => props.rowGap};
  `};
  ${is('autoRows')`
    grid-auto-rows: ${props => props.autoRows};
  `};
  ${is('width')`
    width: ${props => props.width};
  `};
  ${is('height')`
    height: ${props => props.height};
  `};
`;

export const GridItem = styled.div`
  ${is('column')`
    grid-column: ${props => props.column}`};
  ${is('row')`
    grid-row: ${props => props.row}`};
`;
export const FlexRow = styled.div`
  display: flex;
  flex-direction: ${props => props.column && 'column'};
  height: 100%; /* ancestors also need 100% height if column */
  align-items: ${props => props.stretch ? 'stretch' : 'center'};
  justify-content: ${props=> props.justifySpacing ? props.justifySpacing : 'space-between'};
  padding-top: ${props =>
    props.paddingTop && props.theme.spacing.vertical[props.paddingTop]};
  margin: ${props => props.marginAuto && '0 auto'};
`;

export const FlexItem = styled.div`
  flex: ${props => props.flexOrder ? props.flexOrder : 1};
  align-self: ${props => props.align ? props.align : 'center'};
  padding: ${props => props.padding ? props.padding : '10px'};
`

export const Container = styled.div`
  margin-left: ${props => props.marginLeft ? props.theme.spacing.horizontal[props.marginLeft] : 'auto'};
  margin-right: ${props => props.marginRight ? props.theme.spacing.horizontal[props.marginRight] : props.marginLeft ? props.theme.spacing.horizontal[props.marginLeft] : 'auto'};
  height: 100%;
`;
